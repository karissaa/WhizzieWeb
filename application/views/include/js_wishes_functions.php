<script>
    let wishesArr = []

    // Assign Onload Function
    document.onready = function(){init()};
    
    function init(){
        // Populate Wish array
        dbrf.ref("wishes/").once('value').then(function(snapshot){
            // Fetch all wishes
            snapshot.forEach(function(ss){
                wishesArr.push(new Wish(
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
            // wishesArr.sort(function(a,b){return (new Date(b.time)) - (new Date(a.time));});

            // Initiate container Element
            let latestWishSection = document.getElementById("wishSection");
            latestWishSection.innerHTML = '';
            
            let iteration = wishesArr.length;

            for(let i = 0; i < iteration; i++){

                let wish = document.createElement('div');
                wish.setAttribute("class", "col-md-4 col-xs-6");

                // Get Offer Counts for this wish
                dbrf.ref('wishRelation/' +wishesArr[i].wishKey).once('value').then(function(dataSS){
                    let offerCount = dataSS.numChildren();

                    // Fetch image. then append to the section
                    strf.ref('wishes/' +wishesArr[i].pic).getDownloadURL().then(function(url){
                        // After getting the download URL, append the element
    
                        wish.innerHTML =    '<div class="product">' + 
                                                '<div class="product-img">' + 
                                                    '<img src= "' + url + '" alt="" style="object-fit: cover; width: 262.48px; height: 262.48px;">' +
                                                '</div>' +
                                                '<div class="product-body">' +
                                                    '<p class="product-category"> ' + wishesArr[i].category + ' </p>' +
                                                    '<h3 class="product-name" style = "height: 30px;"> <a href="#"> ' + (wishesArr[i].title.length > 40 ? wishesArr[i].title.substring(0, 40) + '...' : wishesArr[i].title) + ' </a> </h3>' +
                                                    '<p style = "height: 30px;"> ' + (wishesArr[i].desc.length > 60 ? wishesArr[i].desc.substring(0, 60) + '...' : wishesArr[i].desc) + ' </p>' +
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

                        latestWishSection.appendChild(wish);
                    });
                });
            }
        });
    }
</script>