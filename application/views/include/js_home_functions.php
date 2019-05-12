<script>
    let latestWishList = [];
    let productList = [];
    let genies = [];

    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2
    })

    // Assign Onload Function
    document.onready = function(){init()};
    
    function init(){
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

            

            dbrf.ref('featured/featuredGenies').on('value', function(snapshot){
                // Get Genies that are featured
                let featuredGenieKeys = [];

                snapshot.forEach(function(dataSnapshot){
                    featuredGenieKeys.push(dataSnapshot.key);                
                });

                // By Using a filter function in the array genies
                function isFeaturedGenie(genie){
                    return featuredGenieKeys.includes(genie.uid);
                }

                // Initiate Featured Genies Array
                let featuredGenies = [];

                featuredGenies = genies.filter(isFeaturedGenie);

                // Initiate Container Element
                let featuredGenieSection = document.getElementById("featuredGenies");
                featuredGenieSection.setAttribute("class", "products-slick slick-initialized slick-slider");
                featuredGenieSection.setAttribute("data-nav", "#slick-nav-1")
                featuredGenieSection.innerHTML = ''

                let subSection = document.createElement("div");
                subSection.setAttribute("class", "slick-list draggable");

                let subSubSection = document.createElement("div");
                subSubSection.setAttribute("class", "slick-track");
                subSubSection.setAttribute("style", "opacity: 1; width: 864px; transform: translate3d(0px, 0px, 0px);");

                for(let i = 0; i < featuredGenies.length; i++){
                    let featuredGenieElement = document.createElement('div');
                    
                    featuredGenieElement.setAttribute("class", "product slick-slide slick-active");
                    featuredGenieElement.setAttribute("tabindex", "0");
                    featuredGenieElement.setAttribute("aria-hidden", "false");
                    featuredGenieElement.setAttribute("style", "width: 258px;");

                    let profileRefPath;
                    let profPic;

                    if(featuredGenies[i].profilePic == '' || featuredGenies[i].profilePic == null)
                        profileRefPath = 'whizzie_assets/empty/empty_profile.jpg';
                    else 
                        profileRefPath = 'users/' + featuredGenies[i].profilePic;

                    // Fetch profile Picture
                    strf.ref(profileRefPath).getDownloadURL().then(function(url_profile_picture){
                        profPic = url_profile_picture;

                        // Images a bit unstable (?)
                        dbrf.ref('products/' + featuredGenies[i].toko.prodList[0] + '/pictureProduct').once('value').then(function(dataSS){                        
                            let productRefPath;                    
                            
                            if(dataSS.val() == '' || dataSS.val() == null) productRefPath = 'whizzie_assets/empty/empty.jpg';
                            else productRefPath = 'products/' + dataSS.val(); 
                            
                            // Get an image of an uploaded product
                            strf.ref(productRefPath).getDownloadURL().then(function(url_product_picture){
                                productPic = url_product_picture;

                                featuredGenieElement.innerHTML =    '<div class="product-img">' +
                                                                        '<img src="' + productPic + '" alt="" style="object-fit: cover; width: 258px; height: 258px;">' +
                                                                        '<div class="product-label" >' +
                                                                            '<img src="' + profPic + '" alt="" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">' +
                                                                        '</div>' +
                                                                    '</div>' +
                                                                    '<div class="product-body">' +
                                                                        '<h3 class="product-name" style = "height: 30px;"> <a href="#"> ' + (featuredGenies[i].toko.name.length > 40 ? featuredGenies[i].toko.name.substring(0, 40) + '...' : featuredGenies[i].toko.name) + ' </a> </h3>' +
                                                                        '<p class="product-category" style = "height:30px;"> ' + (featuredGenies[i].toko.desc.length > 55 ? featuredGenies[i].toko.desc.substring(0, 55) + '...' : featuredGenies[i].toko.desc) +  ' </p>' +
                                                                    '</div>' +
                                                                    '<div class="add-to-cart">' + 
                                                                        '<button class="add-to-cart-btn"> <i class="fa fa-user"></i> Visit Profile </button>' +
                                                                    '</div>';

                                subSubSection.appendChild(featuredGenieElement);
                            });
                        });
                    });
                }

                subSection.appendChild(subSubSection);
                featuredGenieSection.appendChild(subSection);
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

            // Populate Featured Products Section
            dbrf.ref('featured/featuredProducts').on('value',function(dataSS){
                let productKeys = [];
                dataSS.forEach(function(featuredProduct){
                    productKeys.push(featuredProduct.key);
                })

                function isFeatured(product){
                    return productKeys.includes(product.productKey);
                }

                // Filter the featured products only
                let featuredProducts = productList.filter(isFeatured);

                // Initiate Container Element
                let featuredProductSection = document.getElementById("featuredProducts");
                featuredProductSection.setAttribute("class", "products-slick slick-initialized slick-slider");
                featuredProductSection.setAttribute("data-nav", "#slick-nav-2");
                featuredProductSection.innerHTML = ''

                let subSection = document.createElement("div");
                subSection.setAttribute("class", "slick-list draggable");

                let subSubSection = document.createElement("div");
                subSubSection.setAttribute("class", "slick-track");
                subSubSection.setAttribute("style", "opacity: 1; width: 864px; transform: translate3d(0px, 0px, 0px);");
                
                for(let i = 0; i < featuredProducts.length; i++){
                    let featuredProductElement = document.createElement("div");

                    featuredProductElement.setAttribute("class", "product slick-slide slick-active");
                    featuredProductElement.setAttribute("aria-hidden", "false");
                    featuredProductElement.setAttribute("style", "width: 258px;");
                    featuredProductElement.setAttribute("tabindex", "0");

                    function isUploader(genie){
                        return genie.uid == featuredProducts[i].uid;
                    }
                    
                    let uploader = genies.find(isUploader);

                    function isTheStore(lokasi){
                        return lokasi.addressName == uploader.storeAddress;
                    }

                    let storeLoc = uploader.alamat.find(isTheStore);
                    
                    let productPic;
                    let productUrlPic;

                    if(featuredProducts[i].pic == '' || featuredProducts[i].pic == null)
                        productPic = 'whizzie_assets/empty/empty.jpg';
                    else productPic = 'products/' + featuredProducts[i].pic;

                    strf.ref(productPic).getDownloadURL().then(function(url){                        
                        productUrlPic = url;

                        featuredProductElement.innerHTML =  '<div class="product-img">' +
                                                                '<img src="' + productUrlPic + '" alt="" style="object-fit: cover; width: 258px; height: 258px;">' +
                                                            '</div>' +
                                                            '<div class="product-body">' +
                                                                '<h3 class="product-name" style = "height: 30px;"> <a href="#"> ' + (featuredProducts[i].name.length > 40 ? featuredProducts[i].name.substring(0,40) + '...' : featuredProducts[i].name) + ' </a> </h3>' +
                                                                '<h4 class="product-price">' + formatter.format(featuredProducts[i].price) + '</h4>' +
                                                                '<p> <i class="fa fa-map-marker"> </i> &nbsp&nbsp ' + storeLoc.provinceName + '</p>' +
                                                            '</div>' +
                                                            '<div class="add-to-cart">' +
                                                                '<button class="add-to-cart-btn"> <i class="fa fa-shopping-cart"></i> add to cart </button>' +
                                                            '</div>';
    
                        subSubSection.appendChild(featuredProductElement);
                    });
                }

                subSection.appendChild(subSubSection);
                featuredProductSection.appendChild(subSection);
            });
        });
    }
</script>