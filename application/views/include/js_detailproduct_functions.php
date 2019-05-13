<script>
    let offeredWishes = [];

    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2
    });

    // TODO: Kalau udah implement CI, gunakan PHP Echo di sini
    // Get the list of offered Wishes
    dbrf.ref('productRelation/<?=$product_key?>').once('value').then(function(snapshot){
        snapshot.forEach(function(data){
            console.log(data.key);
            dbrf.ref('wishes/' + data.key).once('value').then(function(dataSS){
                offeredWishes.push(new Wish(
                    dataSS.key, 
                    dataSS.child('category').val(),
                    dataSS.child('descWish').val(),
                    dataSS.child('pictureWish').val(),
                    dataSS.child('timeWish').val(),
                    dataSS.child('titleWish').val(),
                    dataSS.child('uidUpWish').val()
                ));
            });
        });
    });

    // TODO: Kalau udah implement CI, gunakan PHP Echo di sini
    dbrf.ref("products/<?=$product_key?>").once('value').then(function(ss){
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

        // Get the Genie
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

            let productImageRef = 'whizzie_assets/empty/empty.jpg';

            if(product.pic != null && product.pic != '')
                productImageRef = 'products/' + product.pic;

            // Product Image
            strf.ref(productImageRef).getDownloadURL().then(function(url){
                document.getElementById('productDetailImage').src = url;
            });

            // Product Name
            document.getElementById('productDetailName').innerHTML = product.name;

            // Product Price
            document.getElementById('productDetailPrice').innerHTML = product.price;

            // Product Description
            document.getElementById('productDetailDesc').innerHTML = product.desc;

            // Product Category
            document.getElementById('categoryTag').innerHTML = product.category;

            // Genie profile Picture
            let profilePicturePath = 'whizzie_assets/empty/empty_profile.jpg';

            if(uploader.profilePic != null && uploader.profilePic != '')
                profilePicturePath = 'users/' + uploader.uid + '/profile.jpg';

            strf.ref(profilePicturePath).getDownloadURL().then(function(url){
                document.getElementById('genieProfilePicture').src = url;
            })

            // Genie Name
            document.getElementById('genieName').innerHTML = uploader.toko.name;

            // Genie Location
            document.getElementById('storeLoc').innerText = uploader.alamat[0].provinceName;

            let iteration = offeredWishes.length;

            let wishesSection = document.getElementById('wishesSection');
            wishesSection.innerHTML = '';

            for(let i = 0; i < iteration; i++){
                let wishImageRef = 'whizzie_assets/empty/empty.jpg';
                let wishImageURL;

                if(offeredWishes[i].pic != null && offeredWishes[i].pic != '')
                    wishImageRef = 'wishes/' + offeredWishes[i].pic;

                strf.ref(wishImageRef).getDownloadURL().then(function(url){
                    wishImageURL = url;

                    let offerCount = 0;

                    dbrf.ref('wishRelation').once('value').then(function(relations){
                        if(relations.hasChild(offeredWishes[i].wishKey))
                            offerCount = relations.child(offeredWishes[i].wishKey).numChildren();

                        let wish = document.createElement('div');
                        wish.setAttribute('class', 'col-md-3 col-xs-6');

                        wish.innerHTML = '<div class="product">' +
                                            '<div class="product-img">' +
                                                '<img src="' + wishImageURL + '" alt="" style="object-fit: cover; width:262.5px; height:262.5px;">' + //TODO: Sesuaiin ukuran di sini
                                            '</div>' +
                                            '<div class="product-body">' +
                                                '<p class="product-category"> ' + offeredWishes[i].category + ' </p>' +
                                                '<h3 class="product-name" style = "height: 30px;"><a> ' + (offeredWishes[i].title.length > 40 ? offeredWishes[i].title.substring(0, 40) + '...' : offeredWishes[i].title) + ' </a></h3>' +
                                                '<p style = "height: 30px;"> ' + (offeredWishes[i].desc.length > 60 ? offeredWishes[i].desc.substring(0,60) + '...' : offeredWishes[i].desc) + ' </p>' +
                                                '<div class="row">' +
                                                    '<button class="btn"><b> ' + offerCount + ' Offers</b></button>' +
                                                '</div>' +
                                            '</div>' +
                                        '</div>';

                        wishesSection.appendChild(wish);
                    });
                });
            }
        });
    });
</script>

    