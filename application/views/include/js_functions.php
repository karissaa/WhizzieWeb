<script>
    let categoryList = [];
    let storage = firebase.storage();
    let catStorageRef = storage.ref('whizzie_assets/categories');

    // Onload Function

    document.onready = function(){init()};
    
    function init(){
        firebase.database().ref('/categories').once('value').then(function(snapshot){

            // Populate categoryList Array
            snapshot.forEach(function(ss){
                categoryList.push(new Category(ss.key, ss.child('imageID').val()));
            });

            // Populate Category Dropdown Search Bar
            let dropdown = document.getElementById("categoryDropdown");
            dropdown.innerHTML = '';

            for(let i = 0; i < categoryList.length; i++){ 
                let option=document.createElement("option");
                option.setAttribute("value", categoryList[i].name); 
                option.innerHTML=categoryList[i].name;
                dropdown.appendChild(option); 
            }
                
            // Populate 3 Highlighted Category Card
            let catContainer = document.getElementById("featuredCat");
            catContainer.innerHTML = '';

            for(let i = 0; i < 3; i++){
                let catCard = document.createElement("div");
                catCard.setAttribute("class", "col-md-4 col-xs-6");

                console.log(categoryList[i].imgID);

                catStorageRef.child(categoryList[i].imgID).getDownloadURL().then(function(url){
                    catCard.innerHTML = '<div class="shop">' +
                                            '<div class= "shop-img">' +
                                                '<img src="' + url + '" alt="">' +
                                            '</div>' +
                                            '<div class="shop-body">' +
                                                '<h3> ' + categoryList[i].name + ' </h3>' +
                                                '<a href="#" class="cta-btn"> Shop now <i class="fa fa-arrow-circle-right"></i> </a>' +
                                            '</div>' +
                                        '</div>';
                    
                    catContainer.appendChild(catCard);
                });
            }
        });
    }
</script>