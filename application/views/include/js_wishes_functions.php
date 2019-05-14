<script>
    let wishesArr = [];
    let categories = [];

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
                    ss.child('pictureWish').val(),
                    ss.child('timeWish').val(),
                    ss.child('titleWish').val(),
                    ss.child('uidUpWish').val()
                ));
            });

            // Sort the wishes using JavaScript Array Sort Prototype
            wishesArr.sort(function(a,b){return (new Date(b.time)) - (new Date(a.time));});

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
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>';

                        latestWishSection.appendChild(wish);
                    });
                });
            }
        });

        // Populate Categories Array
        dbrf.ref('categories').once('value').then(function(cats){
            cats.forEach(function(category){
                categories.push(new Category(category.key, category.child('imageID').val()));
            });

            let iteration = categories.length;

            // Populating Category Input Dropdown
            let categoryInputSection = document.getElementsByClassName("dropdown-toggle")[1];
            categoryInputSection.innerHTML = '';

            // Populating Category Filters
            let categoryFilterSection = document.getElementById("categoryFilter");
            categoryFilterSection.innerHTML = '';

            for(let i = 0; i < iteration; i++){
                let categoryInput = document.createElement('option');
                categoryInput.setAttribute('value', categories[i].name);
                categoryInput.setAttribute('class', 'btn btn-info');
                categoryInput.innerHTML = categories[i].name;

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

    let user = '<?=$user_id?>';

    function uploadWish(){
        if(user == null){
            alert('Sorry, you can only upload wishes when you\'ve signed in')
        } else {
            let newWishTitle = document.getElementById('newWishTitle').value;
            let newWishDesc = document.getElementById('newWishDesc').value;
            let categoryDropDown = document.getElementsByClassName("dropdown-toggle")[1];
            let newWishCat = categoryDropDown[categoryDropDown.selectedIndex].value;

            // Image Upload, can be null
            let newWishImg = document.getElementById('newWishImage');

            if(newWishTitle == '' || newWishDesc == '' || newWishCat == ''){
                alert('Please fill in the input fields properly');
            } else {
                let newKey = 0;
                dbrf.ref('wishes').once('value').then(function(dataSnapshot){
                    dataSnapshot.forEach(function(key){
                        if(key.key > newKey)
                            newKey = parseInt(key.key) + 1;
                    });

                    let now = new Date()
                    let timestamp = now.getFullYear() + '/' + now.getMonth() + '/' + now.getDate() + ' ' + now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();

                    if(newWishImg.files && newWishImg.files[0]){
                        let image = newWishImg.files[0].slice(0, newWishImg.files[0].size, 'image/jpg');
                        let newFile = new File([image], newKey + '.jpg', {type: 'image/jpg'});

                        strf.ref('users/' + user + '/' + newKey + '.jpg').put(newFile)

                        let filename = newKey + '.jpg';

                        dbrf.ref('wishes/' + newKey).set({
                            category : newWishCat,
                            descWish : newWishDesc,
                            pictureWish : filename,
                            timeWish : timestamp,
                            titleWish : newWishTitle,
                            uidUpWish : user
                        });
                    } else {
                        dbrf.ref('wishes/' + newKey).set({
                            category : newWishCat,
                            descWish : newWishDesc,
                            pictureWish : '',
                            timeWish : timestamp,
                            titleWish : newWishTitle,
                            uidUpWish : user
                        });   
                    } 
                });
            }
        }
    }
</script>