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
        dbrf.ref("/wishes").once('value').then(function(snapshot){
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

                // If the user doesn't have 'toko' (kinda impossible), let it be null
                if(ss.hasChild('toko')){
                    // Prepare Toko Object
                    dbrf.ref('users/' + ss.key + '/toko').once('value').then(function(temp){
                        let namaToko = temp.child('name').val();
                        let descToko = temp.child('description').val();
                        let productsToko = [];

                        dbrf.ref('users/' + ss.key + '/toko/products').once('value').then(function(barangs){
                            barangs.forEach(function(barang){
                                productsToko.push(barang.key);
                                console.log(barang.key)
                            });
                            
                        });
                        
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
                            ss.key + '/backdrop.jpg',
                            ss.key + '/profile.jpg',
                            ss.child('storeAddress').val(),                        
                            alamatUser,
                            tokoGenie,
                        ));
                    });
                }
            });

            // Initiate Featured Genies Array
            let featuredGenies = [];

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

                featuredGenies = genies.filter(isFeaturedGenie);
                console.log(featuredGenies);

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
                    
                    if(i == 0) 
                        featuredGenieElement.setAttribute("class", "product slick-slide slick-active");
                    else
                        featuredGenieElement.setAttribute("class", "product slick-slide slick-active");

                    // featuredGenieElement.setAttribute("data-slick-index", i);
                    featuredGenieElement.setAttribute("tabindex", "0");
                    featuredGenieElement.setAttribute("aria-hidden", "false");
                    featuredGenieElement.setAttribute("style", "width: 258px;");

                    let profPic = "<?=base_url('assets/image/empty_profile.jpg')?>";
                    let productPic = "<?=base_url('assets/image/empty.jpg')?>";

                    function appendToHTML(profileURL, imageURL){

                        featuredGenieElement.innerHTML = '<div class="product-img">' +
                                                        '<img src="' + productPic + '" alt="" style="object-fit: cover; width: 258px; height: 258px;">' +
                                                        '<div class="product-label" style="background: white; padding: 3px; border-radius: 62px; margin-left: auto; margin-right: 53px;margin-top: 100px;">' +
                                                            '<img src="' + profPic + '" alt="">' +
                                                        '</div>' +
                                                    '</div>' +
                                                    '<div class="product-body">' +
                                                        '<h3 class="product-name"> <a href="#"> ' + featuredGenies[i].toko.name + ' </a> </h3>' +
                                                        '<p class="product-category"> ' + featuredGenies[i].toko.desc +  ' </p>' +
                                                    '</div>' +
                                                    '<div class="add-to-cart">' + 
                                                        '<button class="add-to-cart-btn"> <i class="fa fa-user"></i> Visit Profile </button>' +
                                                    '</div>';

                        subSubSection.appendChild(featuredGenieElement);
                    }

                    console.log(featuredGenies[i].toko)

                    strf.ref('products/' + featuredGenies[i].toko.prodList[0] + '.jpg').getDownloadURL().then(function(url_product_picture){
                        productPic = url_product_picture;
                        // appendToHTML(profPic, productPic);

                    }).catch(function(error){
                        // appendToHTML(profPic, productPic);
                    });

                    // Fetch profile Picture
                    strf.ref('users/' + featuredGenies[i].profilePic).getDownloadURL().then(function(url_profile_picture){
                        profPic = url_profile_picture;
                        // Get an image of an uploaded product
                        
                    }).catch(function(error){
                        // appendToHTML(profPic, productPic);
                    });
                   

                    appendToHTML(profPic, productPic);
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
                    product.key + '.jpg',
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

                    if(i == 0) 
                        featuredProductElement.setAttribute("class", "product slick-slide slick-current slick-active");
                    else
                        featuredProductElement.setAttribute("class", "product slick-slide slick-active");

                    // featuredProductElement.setAttribute("data-slick-index", i);
                    featuredProductElement.setAttribute("aria-hidden", "false");
                    featuredProductElement.setAttribute("style", "width: 258px;");
                    featuredProductElement.setAttribute("tabindex", "0");
                    
                    let productPic = "<?=base_url('assets/image/empty.jpg')?>";

                    strf.ref('products/' + featuredProducts[i].pic).getDownloadURL().then(function(url){                        
                        productPic = url;
                    });

                    function isUploader(genie){
                        return genie.uid == featuredProducts[i].uid;
                    }
                    
                    let uploader = genies.filter(isUploader)[0];

                    function isTheStore(lokasi){
                        console.log(lokasi.addressName + " compare " + uploader.storeAddress)
                        return lokasi.addressName == uploader.storeAddress;
                    }

                    let storeLoc = uploader.alamat.filter(isTheStore);

                    featuredProductElement.innerHTML =  '<div class="product-img">' +
                                                            '<img src="' + productPic + '" alt="" style="object-fit: cover; width: 258px; height: 258px;">' +
                                                        '</div>' +
                                                        '<div class="product-body">' +
                                                            '<h3 class="product-name"> <a href="#"> ' + featuredProducts[i].name + ' </a> </h3>' +
                                                            '<h4 class="product-price">' + formatter.format(featuredProducts[i].price) + '</h4>' +
                                                            '<p> <i class="fa fa-map-marker"> </i> &nbsp&nbsp ' + storeLoc.provinceName + '</p>' +
                                                        '</div>' +
                                                        '<div class="add-to-cart">' +
                                                            '<button class="add-to-cart-btn"> <i class="fa fa-shopping-cart"></i> add to cart </button>' +
                                                        '</div>';

                    subSubSection.appendChild(featuredProductElement);
                }

                subSection.appendChild(subSubSection);
                featuredProductSection.appendChild(subSection);
            });
        });
    }
</script>