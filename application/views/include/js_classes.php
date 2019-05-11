<script>
    class Category{
        constructor(name, imgID){
            this.name = name;
            this.imgID = imgID;
        }
    }

    class Users{
        constructor(name, email){
            this.name = name;
            this.email = email;
        }
    }

    class Wish{
        constructor(title, category, desc, qty, pic, time, uid){
            this.title = title
            this.category =category
            this.desc = desc
            this.qty = qty
            this.pic = pic
            this.time = time
            this.uid = uid;
        }
    }

    class Product{
        constructor(name, category, desc, mass, pic, time, uid){
            this.name = name
            this.category =category
            this.desc = desc
            this.mass = mass
            this.pic = pic
            this.time = time
            this.uid = uid;
        }
    }
</script>