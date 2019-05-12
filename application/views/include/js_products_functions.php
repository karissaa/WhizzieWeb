<script>
    let productList = [];
    let genies = [];
    let categories = [];

    const formatter = new Intl.NumberFormat('en-US', {  
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2
    });

    // Assign Onload Function
    document.onready = function(){init()};

    function init(){
        // Populate Genie Array
        dbrf.ref('users/').once('value').then(function(users){    
            users.forEach(function(ss){
                let tokoGenie = null;
                let namaToko = ss.child('toko').child('name').val();
                let descToko = ss.child('toko').child('description').val();
                let productsToko = [];

                // If the user doesn't have 'toko' (kinda impossible), let it be null
                if(ss.child('toko').hasChild('products')){
                    dbrf.ref('users/' + ss.key + '/toko/products').once('value').then(function(barangs){
                        barangs.forEach(function(barang){
                            productsToko.push(barang.key);
                        });
                    });
                }
                
                tokoGenie = new Toko(namaToko, descToko, productsToko);
                let alamatUser = [];

                // if user has node 'alamat'
                if(ss.hasChild('alamat')){
                    // Prepare Arrays of Alamat 
                    dbrf.ref('users/' + ss.key + '/alamat').once('value').then(function(addresses){
                        addresses.forEach(function(address){
                            alamatUser.push(new Alamat(
                                address.key,
                                address.child('cityName').val(),
                                address.child('detailAddress').val(),
                                address.child('phoneNum').val(),
                                address.child('postalCode').val(),
                                address.child('provinceName').val(),
                                address.child('receiverName').val()
                            ));
                        });
                    });
                }

                // Populate the array
                genies.push(new Users(
                    ss.key,
                    ss.child('name').val(),
                    ss.child('email').val(),                        
                    ss.child('imgBackground').val(),
                    ss.child('imgProfilePicture').val(),
                    ss.child('storeAddress').val(),                        
                    alamatUser,
                    tokoGenie,
                )); 
            });
        });

        // Populate Products Array
        dbrf.ref('products').once('value').then(function(dataSnapshot){
            // Fetch All products
            dataSnapshot.forEach(function(product){
                productList.push(new Product(
                    product.key,
                    product.child('category').val(),
                    product.child('descProduct').val(),
                    product.child('massProduct').val(),
                    product.child('nameProduct').val(),
                    product.child('pictureProduct').val(),
                    product.child('priceProduct').val(),
                    product.child('timeProduct').val(),
                    product.child('uidUpProduct').val()
                ));
            });

            let iteration = productList.length;

            // Initiate Container Element
            let productSection = document.getElementById("productSection");
            productSection.innerHTML = '';

            let featuredTag =   '<div class = "product-label">' + 
                                    '<span class = "new"> FEATURED </span>' +
                                '</div>';

            dbrf.ref('featured/featuredProducts').on('value',function(dataSS){
                let featuredProductKeys = [];
                
                dataSS.forEach(function(featuredProduct){
                    featuredProductKeys.push(featuredProduct.key);
                });

                for(let i = 0; i < iteration; i++){
                    function isUploader(genie){ return genie.uid == productList[i].uid; }
                    let uploader = genies.find(isUploader);

                    function isTheStore(lokasi){ return lokasi.addressName == uploader.storeAddress; }
                    let storeLoc = uploader.alamat.find(isTheStore);
                    
                    let productPic;
                    let productUrlPic;

                    if(productList[i].pic == '' || productList[i].pic == null)
                        productPic = 'whizzie_assets/empty/empty.jpg';
                    else productPic = 'products/' + productList[i].pic;

                    strf.ref(productPic).getDownloadURL().then(function(url){                
                        productUrlPic = url;

                        let productElement = document.createElement('div');
                        productElement.classList.add('col-md-4', 'col-xs-6');

                        productElement.innerHTML =  '<div class = "product">' +
                                                        '<div class="product-img">' +
                                                            '<img src="' + productUrlPic + '" alt="" style="object-fit: cover; width: 258px; height: 258px;">' +
                                                            (featuredProductKeys.includes(productList[i].productKey) ? featuredTag : '') +
                                                        '</div>' +
                                                        '<div class="product-body">' +
                                                            '<h3 class="product-name" style = "height: 30px;"> <a href="#"> ' + (productList[i].name.length > 40 ? productList[i].name.substring(0,40) + '...' : productList[i].name) + ' </a> </h3>' +
                                                            '<h4 class="product-price">' + formatter.format(productList[i].price) + '</h4>' +
                                                            '<p> <i class="fa fa-map-marker"> </i> &nbsp&nbsp ' + storeLoc.provinceName + '</p>' +
                                                        '</div>' +
                                                        '<div class="add-to-cart">' +
                                                            '<button class="add-to-cart-btn"> <i class="fa fa-shopping-cart"></i> add to cart </button>' +
                                                        '</div>' +
                                                    '</div>';

                        productSection.appendChild(productElement);
                    });
                }
            });
        });

        // Populate Categories Array
        dbrf.ref('categories').once('value').then(function(cats){
            cats.forEach(function(category){
                categories.push(new Category(category.key, category.child('imageID').val()));
            });

            let iteration = categories.length;

            // Populating Category Input Dropdown
            let categoryInputSection = document.getElementById("categoryInputs");
            categoryInputSection.innerHTML = '';

            // Populating Category Filters
            let categoryFilterSection = document.getElementById("categoryFilter");
            categoryFilterSection.innerHTML = '';

            for(let i = 0; i < iteration; i++){
                let categoryInput = document.createElement('li');
                categoryInput.innerHTML = '<a>' + categories[i].name + '</a>';

                categoryInputSection.appendChild(categoryInput);

                let categoryFilter = document.createElement('div');
                categoryFilter.setAttribute('class', 'input-checkbox');

                categoryFilter.innerHTML =  '<input type="checkbox" id="' + categories[i].name +  '">' +
                                            '<label for="' + categories[i].name + '">' +
                                                '<span></span>' +
                                                categories[i].name +
                                            '</label>';

                categoryFilterSection.appendChild(categoryFilter);
            }
        });
    }
</script>