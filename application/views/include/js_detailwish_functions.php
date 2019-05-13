<script>
    let offeredProducts = [];
    let wish;

    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2
    });

    dbrf.ref('wishRelation/<?=$wish_key?>').once('value').then(function(snapshot){
        snapshot.forEach(function(data){
            dbrf.ref('products/' + data.key).once('value').then(function(dataSS){
                offeredProducts.push(new Product(
                    dataSS.key,
                    dataSS.child('category').val(),
                    dataSS.child('descProduct').val(),
                    dataSS.child('massProduct').val(),
                    dataSS.child('nameProduct').val(),
                    dataSS.child('pictureProduct').val(),
                    dataSS.child('priceProduct').val(),
                    dataSS.child('timeProduct').val(),
                    dataSS.child('uidUpProduct').val()
                ));
            });
        });
    });

    dbrf.ref("wishes/<?=$wish_key?>").once('value').then(function(ss){
        wish = new Wish(
            ss.key,
            ss.child('category').val(),
            ss.child('descWish').val(),
            ss.child('pictureWish').val(),
            ss.child('timeWish').val(),
            ss.child('titleWish').val(),
            ss.child('uidUpWish').val()
        );

        let uploader;

        dbrf.ref('users/' + wish.uid).once('value').then(function(snapshot){
            uploader = new Users(
                snapshot.key,
                snapshot.child('name').val(),
                snapshot.child('email').val(),
                snapshot.child('imgBackground').val(),
                snapshot.child('imgProfilePicture').val(),
                snapshot.child('storeAddress').val(),
                [],
                null
            );

            let wishImageRef = 'whizzie_assets/empty/empty.jpg';

            if(wish.pic != null || wish.pic != '')
                wishImageRef = 'wishes/' + wish.pic;

            // Sets Wish Image
            strf.ref(wishImageRef).getDownloadURL().then(function(url){
                document.getElementById('wishDetailImage').src = url;
            });

            // Wish Title
            document.getElementById('wishTitle').innerHTML = wish.title;
            
            // Wish Date 
            document.getElementById('wishDate').innerHTML = wish.time;

            // Wish Description
            document.getElementById('wishDesc').innerHTML = wish.desc;

            // Wish Category
            document.getElementById('wishCat').innerHTML = wish.category;

            // Wisher profile Picture
            let profilePicturePath = 'whizzie_assets/empty/empty_profile.jpg';

            if(uploader.profilePic != null && uploader.profilePic != '')
                profilePicturePath = 'users/' + uploader.uid + '/profile.jpg';

            strf.ref(profilePicturePath).getDownloadURL().then(function(url){
                document.getElementById('wisherImage').src = url;
            });

            // Wisher Name
            document.getElementById('wisherName').innerHTML = uploader.name;

            productsSection = document.getElementById('productsSection');
            productsSection.innerHTML = '';

            offeredProducts.forEach(function(product){
                let productImageRef = 'whizzie_assets/empty/empty.jpg';

                if(product.pic != null && product.pic != '')
                    productImageRef = 'products/' + product.pic;

                strf.ref(productImageRef).getDownloadURL().then(function(productImage){
                    let wishCount = 0;

                    dbrf.ref('productRelation').once('value').then(function(data_snapshot){

                        if(data_snapshot.hasChild(product.productKey))
                            wishCount = data_snapshot.child(product.productKey).numChildren();

                        let prod = document.createElement('div');

                        prod.setAttribute('class', 'col-md-3 col-xs-6');

                        prod.innerHTML = '<div class="product">' +
                                            '<div class="product-img">' +
                                                '<img src="' + productImage + '" alt="" style="object-fit: cover; width:262.5px; height:262.5px;">' +
                                            '</div>' +
                                            '<div class="product-body">' +
                                                '<p class="product-category"> ' + product.category + ' </p>' +
                                                '<h3 class="product-name" style = "height: 30px;"><a> ' + (product.name.length > 40 ? product.name.substring(0, 40) + '...' : product.name) + ' </a></h3>' +
                                                '<p style = "height: 30px;"> ' + (product.desc.length > 60 ? product.desc.substring(0,60) + '...' : product.desc) + ' </p>' +
                                                '<div class="row">' +
                                                    '<button class="btn"><b> ' + wishCount + ' Offers</b></button>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>';

                        productsSection.appendChild(prod);
                    });
                });
            });
        });
    });

    let myProducts = [];
    let uid = '<?=$user_id?>';
    let me;

    dbrf.ref('users/' + uid).once('value').then(function(toko){
        if(toko.hasChild('toko') && toko.hasChild('alamat') && toko.child('storeAddress').val() != '')
            me = new Users(
                uid,
                toko.child('name'),
                null,
                null,
                null,
                toko.child('alamat').child(toko.child('storeAddress').val()).child('provinceName').val(),
                null
            );
    });

    dbrf.ref('products').once('value').then(function(data){
        data.forEach(function(product){
            if(product.child('uidUpProduct').val() == uid){
                myProducts.push(new Product(
                    product.key,
                    product.child('category').val(),
                    product.child('descProduct').val(),
                    product.child('massProduct').val(),
                    product.child('nameProduct').val(),
                    product.child('pictureProduct').val(),
                    product.child('priceProduct').val(),
                    product.child('timestamp').val(),
                    product.child('uidUpProduct').val(),
                ));
            }
        });

        let productOffers = document.getElementById('modalBodyImageOffer')
        productOffers.innerHTML = '';

        myProducts.forEach(function(temp){
            let productImageRef = 'whizzie_assets/empty/empty.jpg';

            if(temp.pic != null && temp.pic != '')
                productImageRef = 'products/' + temp.pic;

            strf.ref(productImageRef).getDownloadURL().then(function(productURL){
                let productCard = document.createElement('div');
                productCard.setAttribute('class', 'col-md-4 col-xs-6"');

                productCard.innerHTML = '<div class="product">' +
                                            '<div class="product-img" style="object-fit: cover; width:160px; height:160px;">' +
                                                '<img src="' + productURL +'" alt="">' +
                                            '</div>' +
                                            '<div class="product-body">' +
                                                '<h3 class="product-name"><a>' + (temp.name.length > 10 ? temp.name.substring(0, 10) + '...' : temp.name) + '</a></h3>' +
                                                '<h4 class="product-price">' +  formatter.format(temp.price) + '</h4>' +
                                                '<p><i class="fa fa-map-marker"></i>&nbsp&nbsp' + temp.alamat + '</p>' +
                                                '<div class="row">' +
                                                    '<button class="btn btn-info" onclick = "makeOffer(' + temp.productKey + ')"><b>OFFER</b></button>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>';

                productOffers.appendChild(productCard);
            });
        });
    });

    function makeOffer(offerKey){
        let now = new Date()
        let timestamp = now.getFullYear() + '/' + now.getMonth() + '/' + now.getDate() + ' ' + now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();

        let updateWishRelation = {}
        updateWishRelation['wishRelation/' + wish.wishKey + '/' + offerKey] = timestamp;

        dbrf.ref().update(updateWishRelation);

        let updateProdRelation = {}
        updateProdRelation['productRelation/' + offerKey + '/' + wish.wishKey] = timestamp;
        dbrf.ref().update(updateProdRelation);
    }
</script>