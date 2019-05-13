<script>
    document.onready = function(){init()};
    let uid = "<?=$user_id?>";
    let myWishes = [];

    function init(){
        dbrf.ref('users/' + uid).once('value').then(function(dataSnapshot){
            let wisher = new Users(
                dataSnapshot.key, 
                dataSnapshot.child('name').val(),
                dataSnapshot.child('email').val(),
                dataSnapshot.child('imgBackground').val(),
                dataSnapshot.child('imgProfilePicture').val(),
                dataSnapshot.child('storeAddress').val(),
                [],                             // Data alamat tidak penting di Profile
                new Toko('', '', [])            // Di wisher, Toko tidak berguna
            );

            // Set Wisher Name
            document.getElementById('wisherName').innerHTML = wisher.name;

            let profilePicRef = 'whizzie_assets/empty/empty_profile.jpg';

            if(wisher.profilePic != ''  & wisher.profilePic != null)
                profilePicRef = 'users/' + wisher.uid + '/profile.jpg';

            strf.ref(profilePicRef).getDownloadURL().then(function(url){
                // Set Wisher Profile Picture
                document.getElementById('myProfilePic').src = url;

                let backgroundPicRef = 'whizzie_assets/empty/empty.jpg';

                if(wisher.backgroundPic != ''  & wisher.backgroundPic != null)
                    backgroundPicRef = 'users/' + wisher.uid + '/backdrop.jpg';

                strf.ref(backgroundPicRef).getDownloadURL().then(function(backgroundURL){
                    // Set Wisher Background Picture
                    document.getElementById('myBackgroundPic').setAttribute('style', 'overflow: auto; background-size: 100%; background-repeat: no-repeat; float: none; text-align:center; height: 420px; background-image: url(' + backgroundURL + ');');
                });
            });
        });

        dbrf.ref('wishes').once('value').then(function(dataSS){

            dataSS.forEach(function(ss){
                if(ss.child('uidUpWish').val() == uid){
                    myWishes.push(new Wish(
                        ss.key,
                        ss.child('category').val(),
                        ss.child('descWish').val(),
                        ss.child('pictureWish').val(),
                        ss.child('timeWish').val(),
                        ss.child('titleWish').val(),
                        uid,
                    ));
                }
            });

            function sortDate(a,b){return (new Date(b.time)) - (new Date(a.time));}
            myWishes.sort(sortDate);

            let wishContainer = document.getElementById('wishContainer');
            wishContainer.innerHTML = '';

            myWishes.forEach(function(item){
                let wishImageRef = 'whizzie_assets/empty/empty.jpg';

                if(item.pic != '' && item.pic != null)
                    wishImageRef = 'wishes/' + item.pic;

                strf.ref(wishImageRef).getDownloadURL().then(function(wishImage){
                    dbrf.ref('wishRelation').once('value').then(function(snapShotData){
                        let offerCount = 0;
                        if(snapShotData.hasChild(item.wishKey)){
                            offerCount = snapShotData.child(item.wishKey).numChildren();
                        }

                        let container = document.createElement('div');
                        container.setAttribute('class', 'col-md-3 col-xs-6');

                        container.innerHTML =   '<div class="product">' +
                                                    '<div class="product-img">' +
                                                        '<img src="' + wishImage + '" alt="" style="object-fit: cover; width: 260px; height: 260px;">' +
                                                    '</div>' +
                                                    '<div class="product-body">' +
                                                        '<p class="product-category"> ' + item.category + ' </p>' +
                                                        '<h3 class="product-name" style = "height:30px;"    > <a href="#"> ' + (item.title.length > 30 ? item.title.substring(0, 30) + '...' : item.title) + ' </a> </h3>' +
                                                        '<p style = "height: 30px;">' + (item.desc.length > 60 ? item.desc.substring(0, 60) + '...' : item.desc) + '</p>' +
                                                        '<div class="row">' +
                                                            '<button class="btn"><b> ' + offerCount + ' Offers</b></button>' +
                                                            '<div class="btn-group product-btns">' +
                                                                '<button type="button" class="add-to-wishlist dropdown-toggle" data-toggle="dropdown">' +
                                                                    '<i class="fa fa-ellipsis-v"></i><span class="tooltipp">Settings</span>' +
                                                                '</button>' +
                                                                '<div class="dropdown-menu">' +
                                                                    '<a class="dropdown-item" onclick ="editModal(' + item.wishKey + ')">Edit</a>' +
                                                                    '<a class="dropdown-item" onclick = "delete(' + item.wishKey + ')">Delete</a>' +
                                                                '</div>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>';

                        wishContainer.appendChild(container);
                    });
                }); 
            });
        });
    }

    function deleteWish(wishKey){
        dbrf.ref('wishes/' + wishKey).remove();

        location.reload();
    }
    
    function editWish(){
        let primaryKey = document.getElementById('modalWishKey').value
        
        let wishUpdates = {}

        wishUpdates['wishes/' + primaryKey + '/titleWish'] = document.getElementById('modalWishTitle').value
        wishUpdates['wishes/' + primaryKey + '/descWish'] = document.getElementById('modalWishDesc').value

        dbrf.ref().update(wishUpdates);
        location.reload();
    }
</script>