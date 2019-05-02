<?php
    foreach($data as $row){ 
    
    /*
        Note : 
            1. Gunakan Bootstrap 4.0 agar card bisa berjalan!
            2. Asumsi data yang dipassing adalah $data dan dijadikan $row untuk looping


        Variable :
            1. $row["itemName"] : Sesuai dengan namanya, menampung nama barang yang ingin ditampilkan
            2. $row["itemPrice"] : Variabel yang menampung harga barang yang ingin ditampilkan
            3. $row["itemRating"] : Variabel yang menampung rating barang yang ingin ditampilkan
                \-> item Rating sbenernya mau span fa-fa bintang itu, tapi gw gatau caranya, refer ke Whizzie unuk liat maksudnya
            4. 
        
        Reference :
            https://getbootstrap.com/docs/4.0/components/card/

    */
        
        
?>
    <div class="card">
        <img src=<?php $row["posterLink"];?> alt="">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row["itemName"]; ?></h5>
            <p class="card-text"><?php echo $row["itemPrice"]; ?></p>
            <br>
            <span><?php echo $row["itemRating"]; ?></span>
            <!-- Masukkin yang 3 icon disini, gw ga yakin caranya gimana -->
        </div>
    </div>
<?php
    }
?>