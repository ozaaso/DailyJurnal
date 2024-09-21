<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Tab Headear -->
<?php include 'layout/header.php';?>
<!-- design konten -->
<link rel="stylesheet" href="../../public/css/harian.css">

</head>
<body>

   <!-- Tab navbar -->
   <?php include 'layout/navbar.php';?>

<div class="container">


   <!-- Profile section -->
     
   

     <!-- <div class="card">
       <img src="https://cdn-icons-png.flaticon.com/512/147/147144.png" alt="Avatar">
       <div class="profile-info">
           <p class="name">John Doe</p>
           <p class="origin">New York, USA</p>
           <p class="date">September 22, 2024</p>
       </div>
   </div> -->
   <br><br>
<div class="card">
        <div class="card-header">
            <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="icon">
            <h2>Ceklist Jurnal Harian</h2>
        </div>
        <ul class="checklist">
             <li>
                <input type="checkbox" name="ibadah[]" value="Tahajud" id="tahajud">
                <label for="tahajud">Tahajud</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Subuh on time" id="subuh-on-time">
                <label for="subuh-on-time">Subuh on time</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Sholat Fajr" id="qobliyah-subuh">
                <label for="qobliyah-subuh">Qobliyah Subuh</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Tilawah pagi" id="tilawah-pagi">
                <label for="tilawah-pagi">Tilawah pagi</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Zikir pagi" id="zikir-pagi">
                <label for="zikir-pagi">Zikir pagi</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Sedekah Subuh" id="sedekah-subuh">
                <label for="sedekah-subuh">Sedekah Subuh</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Dhuha" id="dhuha">
                <label for="dhuha">Dhuha</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Mendoakan orang lain" id="mendoakan-orang-lain">
                <label for="mendoakan-orang-lain">Mendoakan orang lain</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Zuhur on time" id="zuhur-on-time">
                <label for="zuhur-on-time">Zuhur on time</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Qobliyah zuhur" id="qobliyah-zuhur">
                <label for="qobliyah-zuhur">Qobliyah zuhur</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Ba'diyah zuhur" id="badiyah-zuhur">
                <label for="badiyah-zuhur">Ba'diyah zuhur</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Asar on time" id="asar-on-time">
                <label for="asar-on-time">Asar on time</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Magrib on time" id="magrib-on-time">
                <label for="magrib-on-time">Magrib on time</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Tilawah malam" id="tilawah-malam">
                <label for="tilawah-malam">Tilawah malam</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Isya on time" id="isya-on-time">
                <label for="isya-on-time">Isya on time</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Baca Al Waqi'ah" id="baca-al-waqiah">
                <label for="baca-al-waqiah">Baca Al Waqi'ah</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Baca Al Mulk" id="baca-al-mulk">
                <label for="baca-al-mulk">Baca Al Mulk</label>
            </li>
            <li>
                <input type="checkbox" name="ibadah[]" value="Berhalangan" id="berhalangan">
                <label for="berhalangan">Berhalangan</label>
            </li>
        </ul>
   
</div>
    <!-- <br><br><br><br><br> -->
     <!-- Tab Bar -->

</div>




<?php include 'layout/tab.php';?>

<!-- tab js -->
<script src="../../public/js/tab.js"></script>
</body>
<!-- <footer>ini adalah footer</footer> -->
</html>
