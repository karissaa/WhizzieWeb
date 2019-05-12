<script>
    let offeredWishes = [];

    // TODO: Kalau udah implement CI, gunakan PHP Echo di sini
    dbrf.ref("products/0").once('value').then(function(ss){
        let product = new Product(
            ss.key,
            ss.child('category').val(),
            ss.child('descProduct').val(),
            ss.child('massProduct').val(),
            ss.child('nameProduct').val(),
            ss.child('pictureProduct').val(),
            ss.child('priceProduct').val(),
            ss.child('timeProduct').val(),
            ss.child('uidUpProduct').val(),
        );

        let uploader;

        dbrf.ref('users/' + product.uid).once('value').then(function(snapshot){
            let tokoUser = new Toko(
                snapshot.child('toko').child('name').val(),
                snapshot.child('toko').child('description').val(),
                []  // Array of products ga penting di sini
            );

            let alamatUser = []; // Yang penting di sini cuma Store Address
            let storeName = snapshot.child('storeAddress').val();

            alamatUser.push(new Alamat(
                storeName,
                snapshot.child('alamat').child(storeName).child('cityName').val(),
                snapshot.child('alamat').child(storeName).child('detailAddress').val(),
                snapshot.child('alamat').child(storeName).child('phoneNum').val(),
                snapshot.child('alamat').child(storeName).child('postalCode').val(),
                snapshot.child('alamat').child(storeName).child('provinceName').val(),
                snapshot.child('alamat').child(storeName).child('receiverName').val(),
            ));
            

            uploader = new Users(
                snapshot.key,
                snapshot.child('name').val(),
                snapshot.child('email').val(),
                snapshot.child('imgBackground').val(),
                snapshot.child('imgProfilePicture').val(),
                snapshot.child('storeAddress').val(),
                alamatUser,
                tokoUser
            );
        });

        dbrf.ref('productRelation/' + ss.key).once('value').then(function(snapshot){
            let offeredWishes = [];
            
            snapshot.forEach(function(data){
                dbrf.ref('wishes/' + data.key).once('value').then(function(dataSS){
                    offeredWishes.push(new Wishes(

                    ));
                });
            });
        });
    });


    // Populate Wish array
    dbrf.ref("wishes/").once('value').then(function(snapshot){
        // Fetch all wishes
        snapshot.forEach(function(ss){
            latestWishList.push(new Wish(
                ss.key, 
                ss.child('category').val(),
                ss.child('descWish').val(),
                ss.key + '.jpg',
                ss.child('timeWish').val(),
                ss.child('titleWish').val(),
                ss.child('uidUpWish').val()
            ));
        });

        // Sort the wishes using JavaScript Array Sort Prototype
        latestWishList.sort(function(a,b){return (new Date(b.time)) - (new Date(a.time));});

        // Initiate container Element
        let latestWishSection = document.getElementById("latestWish");
        latestWishSection.innerHTML = '';

        // Only get top 3
        for(let i = 0; i < 3; i++){
            let recentWish = document.createElement('div');
            recentWish.setAttribute("class", "col-md-4 col-xs-6");

            // Get Offer Counts for this wish
            dbrf.ref('wishRelation/' + latestWishList[i].wishKey).once('value').then(function(dataSS){
                let offerCount = dataSS.numChildren();

                // Fetch image. then append to the section
                strf.ref('wishes/' + latestWishList[i].pic).getDownloadURL().then(function(url){
                    // After getting the download URL, append the element

                    recentWish.innerHTML =  '<div class="product">' + 
                                                '<div class="product-img">' + 
                                                    '<img src= "' + url + '" alt="" style="object-fit: cover; width: 353.33px; height: 353.33px;">' +
                                                    '<div class="product-label">' +
                                                        '<span class="new"> NEW </span>' +
                                                    '</div>' +
                                                '</div>' +
                                                '<div class="product-body">' +
                                                    '<p class="product-category"> ' + latestWishList[i].category + ' </p>' +
                                                    '<h3 class="product-name"> <a href="#"> ' + latestWishList[i].title + ' </a> </h3>' +
                                                    '<p> ' + latestWishList[i].desc + ' </p>' +
                                                    '<div class="row">' + 
                                                        '<button class="btn"> <b> ' + offerCount + ' Offers </b> </button>' +
                                                        '<div class="btn-group product-btns">' +
                                                            '<button type="button" class="add-to-wishlist dropdown-toggle" data-toggle="dropdown">' +
                                                                '<i class="fa fa-ellipsis-v"></i><span class="tooltipp">Settings</span>' +
                                                            '</button>' +
                                                            '<div class="dropdown-menu">' +
                                                                '<a class="dropdown-item" href="#">Edit</a>' +
                                                                '<a class="dropdown-item" href="#">Delete</a>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>';

                    latestWishSection.appendChild(recentWish);
                });
            });
        }
    });
</script>