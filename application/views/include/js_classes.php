<script>
    class Category{
        constructor(name, imgID){
            this.name = name;               // Key
            this.imgID = imgID;
        }
    }

    class Toko{
        constructor(name, desc, prodList){
            this.name = name;                // Key
            this.desc = desc;
            this.prodList = prodList;        // Array of productKeys
        }
    }

    class Alamat{
        constructor(addressName, cityName, detailAddress, phoneNum, postalCode, provinceName, receiverName){
            this.addressName = addressName;  // Key
            this.cityName = cityName;
            this.detailAddress = detailAddress;
            this.phoneNum = phoneNum;
            this.postalCode = postalCode;
            this.provinceName = provinceName;
            this.receiverName = receiverName;
        }
    }

    class Wish{
        constructor(wishKey, category, desc, pic, time, title, uid){
            this.wishKey = wishKey;      // Key
            this.category = category;
            this.desc = desc;
            this.pic = pic;
            this.time = time;            // Date Object
            this.title = title;
            this.uid = uid;
        }
    }

    class Product{
        constructor(productKey, category, desc, mass, name, pic, price, time, uid){
            this.productKey = productKey;    // Key
            this.category = category;
            this.desc = desc;
            this.mass = mass;
            this.name = name;
            this.pic = pic;
            this.price = price; 
            this.time = time;                // Date Object
            this.uid = uid;
        }
    }

    class Users{
        constructor(uid, name, email, backgroundPic, profilePic, storeAddress, alamat, toko){
            this.uid = uid                   // Key
            this.name = name;
            this.email = email;
            this.backgroundPic = backgroundPic;
            this.profilePic = profilePic;
            this.storeAddress = storeAddress;
            this.alamat = alamat;           // Array of Alamat for users, Alamat Toko for genies
            this.toko = toko;               // Object Toko
        }
    }

    // TODO: Add Transaction & Cart
</script>