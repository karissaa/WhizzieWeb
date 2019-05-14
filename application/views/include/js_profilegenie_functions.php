<script>
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2
    });

    document.onready = function(){init();}
    let uid = "<?=$user_id?>";
    let productsArr = [];


    function init(){

        dbrf.ref('users/' + uid).once('value').then(function(dataSnapshot){
            let toko = new Toko(
                dataSnapshot.child('toko').child('name').val(), 
                dataSnapshot.child('toko').child('description').val(), 
                []
            ); 

            let storeAddress = dataSnapshot.child('storeAddress').val();

            let alamatToko = [];

            if(storeAddress == null || storeAddress == ''){
                // Kalau belum pilih alamat toko
            } else {
                alamatToko.push(new Alamat(
                    storeAddress,
                    dataSnapshot.child('alamat').child(storeAddress).child('cityName').val(),
                    dataSnapshot.child('alamat').child(storeAddress).child('detailAddress').val(),
                    dataSnapshot.child('alamat').child(storeAddress).child('phoneNum').val(),
                    dataSnapshot.child('alamat').child(storeAddress).child('postalCode').val(),
                    dataSnapshot.child('alamat').child(storeAddress).child('provinceName').val(),
                    dataSnapshot.child('alamat').child(storeAddress).child('receiverName').val(),
                ));
            }
            
            let genie = new Users(
                dataSnapshot.key, 
                dataSnapshot.child('name').val(),
                dataSnapshot.child('email').val(),
                dataSnapshot.child('imgBackground').val(),
                dataSnapshot.child('imgProfilePicture').val(),
                storeAddress,
                alamatToko,                             
                toko
            );

            // Prepare and render Product Cards
            if(dataSnapshot.child('toko').hasChild('products')){
                dataSnapshot.child('toko').child('products').forEach(function(product){
                    genie.toko.prodList.push(product.key);
                });

                
                let productContainer = document.getElementById('productContainer');
                productContainer.innerHTML = '';

                genie.toko.prodList.forEach(function(key){
                    dbrf.ref('products/' + key).once('value').then(function(ss){
                        productsArr.push(new Product(
                            ss.key,
                            ss.child('category').val(),
                            ss.child('descProduct').val(),
                            ss.child('massProduct').val(),
                            ss.child('nameProduct').val(),
                            ss.child('pictureProduct').val(),
                            ss.child('priceProduct').val(),
                            ss.child('timestamp').val(),
                            ss.child('uidUpProduct').val()
                        ));
                        
                        if(productsArr.length == genie.toko.prodList.length){
                            productsArr.forEach(function(product){
                                let productURLRef = 'whizzie_assets/empty/empty.jpg';
    
                                if(product.pic!= null && product.pic != '')
                                    productURLRef = 'products/' + product.productKey + '.jpg';
    
                                strf.ref(productURLRef).getDownloadURL().then(function(productURL){
                                    dbrf.ref('productRelation/' + product.productKey).once('value').then(function(dataSnap){
                                        
                                        let wishCount = dataSnap.numChildren();
    
                                        let productElement = document.createElement('div');
                                        productElement.setAttribute('class', 'col-md-3 col-xs-6');
    
                                        productElement.innerHTML =  '<div class="product">' +
                                                                        '<div class="product-img">' +
                                                                            '<img src="' + productURL + '" alt="" style="object-fit: cover; width: 260px; height: 260px;">' +
                                                                        '</div>' +
                                                                        '<div class="product-body">' +
                                                                            '<h3 class="product-name" style = "height:30px;"> <a> ' + (product.name.length > 30 ? product.name.substring(0, 30) + '...' : product.name) +' </a></h3>' +
                                                                            '<h4 class="product-price"> ' + formatter.format(product.price) + ' </h4>' +
                                                                            '<p><i class="fa fa-map-marker"></i>&nbsp&nbsp ' + genie.alamat[0].provinceName + ' </p>' +
                                                                            '<div class="row">' +
                                                                                '<button class="btn"><b>' + wishCount + ' Wishes</b></button>' +
                                                                                '<div class="btn-group product-btns">' +
                                                                                    '<button type="button" class="add-to-wishlist dropdown-toggle" data-toggle="dropdown">' +
                                                                                        '<i class="fa fa-ellipsis-v"></i><span class="tooltipp">Settings</span>' +
                                                                                    '</button>' +
                                                                                    '<ul class="dropdown-menu">' +
                                                                                        '<li><a class="btn dropdown-item" onclick="editModal(' + product.productKey + ')">Edit</a></li>' +
                                                                                        '<li><a class="btn dropdown-item" onclick="deleteProduct(' + product.productKey + ')">Delete</a></li>' +
                                                                                    '</ul>' +
                                                                                '</div>' +
                                                                            '</div>' +
                                                                        '</div>' +
                                                                    '</div>';
    
                                        productContainer.appendChild(productElement);
                                    });
                                });
                            });
                        }
                    });

                });
            }

            //Set Genie Name
            document.getElementById('genieName').innerHTML = genie.toko.name;

            let backgroundImageRef = 'whizzie_assets/empty/empty.jpg';

            if(genie.backgroundPic != '' && genie.backgroundPic != null)
                backgroundImageRef = 'users/' + genie.uid + '/backdrop.jpg';

            // Fetch background image
            strf.ref(backgroundImageRef).getDownloadURL().then(function(url){
                // Set backdrop Image
                document.getElementById('genieBackdrop').setAttribute('style', 'overflow: auto; background-size: 100%; background-repeat: no-repeat; float: none; text-align:center; height: 420px; background-image:url(' + url + ')');
                
                let profilePicRef = 'whizzie_assets/empty/empty_profile.jpg';

                if(genie.profilePic != '' && genie.profilePic != null)
                    profilePicRef = 'users/' + genie.uid + '/profile.jpg';

                // Fetch Profile Picture
                strf.ref(profilePicRef).getDownloadURL().then(function(link){
                    // Set Profile Picture
                    document.getElementById('genieProfPic').src = link;
                });
            });
        });
    }

    function deleteProduct(productKey){
        dbrf.ref('products/' + productKey).remove();

        location.reload();
    }
    
    function editProduct(){
        let primaryKey = document.getElementById('modalProductKey').value
        
        let wishUpdates = {}

        wishUpdates['products/' + primaryKey + '/titleProduct'] = document.getElementById('modalProductName').value
        wishUpdates['products/' + primaryKey + '/descProduct'] = document.getElementById('modalProductDesc').value
        wishUpdates['products/' + primaryKey + '/priceProduct'] = document.getElementById('modalProductPrice').value;

        dbrf.ref().update(wishUpdates);
        location.reload();
    }
</script>

