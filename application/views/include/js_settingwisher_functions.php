<script>
    let wisher;

    //Handle waiting to upload each file using promise
    function uploadImageAsPromise (imageFile) {
        return new Promise(function (resolve, reject) {
            //Upload file
            let task = strf.ref('users/' + wisher.uid + '/' + imageFile.name).put(imageFile);

            let updates = {};
            updates['users/' + wisher.uid + '/imgProfilePicture'] = 'profile.jpg';
            updates['users/' + wisher.uid + '/imgBackground'] = 'backdrop.jpg';
            firebase.database().ref().update(updates);
        });
    }

    function saveChanges(){
        let images = [];

        let newProfilePic = document.getElementById('profilePictureInput');
        let newBackdropPic = document.getElementById('backdropPictureInput');

        if(newProfilePic.files && newProfilePic.files[0]){
            let blob = newProfilePic.files[0].slice(0, newProfilePic.files[0].size, 'image/jpg'); 
            let newFile = new File([blob], 'profile.jpg', {type: 'image/jpg'});
            images.push(newFile);
        }

        if(newBackdropPic.files && newBackdropPic.files[0]){
            let blob = newBackdropPic.files[0].slice(0, newBackdropPic.files[0].size, 'image/jpg'); 
            let newFile = new File([blob], 'backdrop.jpg', {type: 'image/jpg'});

            images.push(newFile);
        }

        let promiseArr = [];
        
        for (var i = 0; i < images.length; i++) {
            var imageFile = images[i];
            promiseArr.push(uploadImageAsPromise(imageFile));
        }

        Promise.all(promiseArr).then(function(results){
            alert('Image Uploaded Successfully');
            location.reload();
        });
    }

    function resetPassword(){
        let targetEmail = firebase.auth().currentUser.email;

        firebase.auth().sendPasswordResetEmail(emailAddress).then(function() {
            // Email sent.
            alert('An email has been sent to ' + targetEmail);
        }).catch(function(error) {
            // An error happened.
            alert('Failed to send email to ' + targetEmail);
        });
    }

    function previewImageProfile(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();
            
            reader.onload = function(e) {
                document.getElementById('imageProfile').src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewImageBackdrop(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imageBackdrop').setAttribute('style', 'overflow: auto; background-size: 100%; background-repeat: no-repeat; float: none; text-align:center; height: 420px; background-image: url(' + e.target.result + ')')
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function init(){
        let uid = "<?=$user_id?>";

        dbrf.ref('users/' + uid).once('value').then(function(dataSnapshot){

            if(dataSnapshot.hasChild('alamat')){
                let alamatUser = [];            
                
                dbrf.ref('users/' + uid + '/alamat').once('value').then(function(ss){
                    ss.forEach(function(dataSS){
                        alamatUser.push(new Alamat(
                            dataSS.key,
                            dataSS.child('cityName').val(),
                            dataSS.child('detailAddress').val(),
                            dataSS.child('phoneNum').val(),
                            dataSS.child('postalCode').val(),
                            dataSS.child('provinceName').val(),
                            dataSS.child('receiverName').val()
                        ));
                    });

                    wisher = new Users(
                        uid,
                        dataSnapshot.child('name').val(),
                        dataSnapshot.child('email').val(),
                        dataSnapshot.child('imgBackground').val(),
                        dataSnapshot.child('imgProfilePicture').val(),
                        dataSnapshot.child('storeAddress').val(),
                        alamatUser,
                        null
                    );

                    applyToHTML(wisher);
                });
            } else {
                wisher = new Users(
                    uid,
                    dataSnapshot.child('name').val(),
                    dataSnapshot.child('email').val(),
                    dataSnapshot.child('imgBackground').val(),
                    dataSnapshot.child('imgProfilePicture').val(),
                    dataSnapshot.child('storeAddress').val(),
                    [],
                    null
                );
                applyToHTML(wisher);
            }
        });
    }

    function applyToHTML(wisher){
        document.getElementById('displayName').value = wisher.name;
        document.getElementById('wisherName').innerHTML = wisher.name;

        let profileImageRef = 'whizzie_assets/empty/empty_profile.jpg';

        if(wisher.profilePic != null && wisher.profilePic != '')
            profileImageRef = 'users/' + wisher.uid + '/profile.jpg';


        strf.ref(profileImageRef).getDownloadURL().then(function(url){
            // Set profile picture
            document.getElementById('imageProfile').src = url;
            
            let backdropImageRef = 'whizzie_assets/empty/empty.jpg';

            if(wisher.backgroundPic != null & wisher.backgroundPic != '')
                backdropImageRef = 'users/' + wisher.uid + '/backdrop.jpg';

            strf.ref(backdropImageRef).getDownloadURL().then(function(link){
                // Set Backdrop Image
                document.getElementById('imageBackdrop').setAttribute('style', 'overflow: auto; float: none; text-align:center; height:420px; background-image:url(' + link +')');
            });
        });

        let addressContainer = document.getElementById('demoo');
        addressContainer.innerHTML = '';

        wisher.alamat.forEach(function(address){
            let addressCard = document.createElement('div');
            addressCard.setAttribute('style', 'background-color: white; border-radius: 25px; padding: 20px;margin:1px;margin-bottom:5px; margin-top:20px;');
            addressCard.setAttribute('class', 'row');

            addressCard.innerHTML = '<div class="row" id = "' + address.addressName + '">' +
                                        '<div class="col-sm-4">' +
                                            '<h4>' + address.addressName + '</h4>' +
                                            '<p><span><b>Receiver: </b></span><span id = "receiverName"> ' + address.receiverName + ' </span></p>' +
                                            '<p style = "width: 343px;" id = "detailAddress"> ' + address.detailAddress + ' </p>' +
                                        '</div>' +
                                        '<div class="col-sm-3">' +
                                            '<p><b>City</b></p>' +
                                            '<p id = "cityName"> ' + address.cityName + ' </p>' +
                                            '<p><b>Province</b></p>' +
                                            '<p id = "provinceName"> ' + address.provinceName +' </p>' +
                                        '</div>' +
                                        '<div class="col-sm-3">' +
                                            '<p><b>Postal Code</b></p>' +
                                            '<p id = "postalCode">' + address.postalCode + '</p>' +
                                            '<p><b>Phone Number</b></p>' +
                                            '<p id = "phoneNumber"> ' + address.phoneNum + ' </p>' +
                                        '</div>' +
                                        '<div class="col-sm-2">' +
                                            '<button type="button" class="btn btn-info" onclick = "openModal(\'' + address.addressName + '\')">Edit Address</button>' +
                                            (wisher.storeAddress === address.addressName ? '<h5 style="color: orange; margin-top:10px;">[Store Address]</h5>' : '') +
                                        '</div>' +
                                    '</div>';

            addressContainer.appendChild(addressCard);
        });

        let addAddressButton = document.createElement('div');
        addAddressButton.setAttribute('class', 'row')
        addAddressButton.setAttribute('style', 'border-radius: 25px; padding: 20px;');

        addAddressButton.innerHTMl = '<button class="btn btn-info" style="border-radius: 25px; display: block; padding:20px; width: 100%;" onclick = "openModal(null)"><b> Tambah Alamat <b></button>';

        addressContainer.appendChild(addAddressButton);
    }

    function openModal(id){
        if(id != null && id != ''){
            let chosenAddress = document.getElementById(id);

            document.getElementById('newAddressName').value         = id;
            document.getElementById('oldAddressName').value         = id;
            document.getElementById('newAddressCity').value         = chosenAddress.querySelector("#cityName").innerHTML;
            document.getElementById('newAddressDetail').value       = chosenAddress.querySelector("#detailAddress").innerHTML;
            document.getElementById('newAddressPhoneNumber').value  = chosenAddress.querySelector("#phoneNumber").innerHTML;
            document.getElementById('newAddressPostalCode').value   = chosenAddress.querySelector("#postalCode").innerHTML;
            document.getElementById('newAddressProvinceName').value = chosenAddress.querySelector("#provinceName").innerHTML;
            document.getElementById('newAddressReceiverName').value = chosenAddress.querySelector("#receiverName").innerHTML;
            document.getElementById('isStoreAddress').checked = (wisher.storeAddress == id)
        } else {    
            document.getElementById('newAddressName').value         = '';
            document.getElementById('oldAddressName').value         = '';
            document.getElementById('newAddressCity').value         = '';
            document.getElementById('newAddressDetail').value       = '';
            document.getElementById('newAddressPhoneNumber').value  = '';
            document.getElementById('newAddressPostalCode').value   = '';
            document.getElementById('newAddressProvinceName').value = '';
            document.getElementById('newAddressReceiverName').value = '';
            document.getElementById('isStoreAddress').checked = false;
        }

        showModal();
    }

    function submitAddress(){
        if(document.getElementById('oldAddressName').value != ''){
            // Remove old address
            let oldAddressKey   = document.getElementById('oldAddressName').value;
            let newAddressKey   = document.getElementById('newAddressName').value;
            let newCityName     = document.getElementById('newAddressCity').value;
            let newDetailAddress= document.getElementById('newAddressDetail').value;
            let newPhoneNumber  = document.getElementById('newAddressPhoneNumber').value;
            let newPostalCode   = document.getElementById('newAddressPostalCode').value;
            let newProvinceName = document.getElementById('newAddressProvinceName').value;
            let newReceiverName = document.getElementById('newAddressReceiverName').value;
            let isStoreAddress  = document.getElementById('isStoreAddress').checked;

            dbrf.ref('users/' + wisher.uid + '/alamat/' + oldAddressKey).remove();

            dbrf.ref('users/' + wisher.uid + '/alamat/' + newAddressKey).set({
                cityName : newCityName,
                detailAddress : newDetailAddress,
                phoneNum : newPhoneNumber,
                postalCode : newPostalCode,
                provinceName : newProvinceName,
                receiverName : newReceiverName
            });

            if(isStoreAddress){
                let updates = {};

                updates['users/' + wisher.uid + '/storeAddress'] = newAddressKey;
                firebase.database().ref().update(updates);
            }
        }

        if(document.getElementById('newAddressName').value == '' || document.getElementById('newAddressName').value == null){
            alert('Please Fill in the Address Name Properly!');
        }
        else{
            let oldAddressKey   = document.getElementById('oldAddressName').value;
            let newAddressKey   = document.getElementById('newAddressName').value;
            let newCityName     = document.getElementById('newAddressCity').value;
            let newDetailAddress= document.getElementById('newAddressDetail').value;
            let newPhoneNumber  = document.getElementById('newAddressPhoneNumber').value;
            let newPostalCode   = document.getElementById('newAddressPostalCode').value;
            let newProvinceName = document.getElementById('newAddressProvinceName').value;
            let newReceiverName = document.getElementById('newAddressReceiverName').value;
            let isStoreAddress  = document.getElementById('isStoreAddress').checked;


            dbrf.ref('users/' + wisher.uid + '/alamat/' + newAddressKey).set({
                cityName : newCityName,
                detailAddress : newDetailAddress,
                phoneNum : newPhoneNumber,
                postalCode : newPostalCode,
                provinceName : newProvinceName,
                receiverName : newReceiverName
            });

            if(isStoreAddress){
                let updates = {};

                updates['users/' + wisher.uid + '/storeAddress'] = newAddressKey;
                firebase.database().ref().update(updates);
            }
        }

        location.reload();
    }

    document.onready = function(){init()}
</script>

