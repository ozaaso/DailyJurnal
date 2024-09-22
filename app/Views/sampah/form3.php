<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Tab Headear -->
<?php include 'layout/header.php';?>

    <link rel="stylesheet" href="../../public/css/form.css">
    
</head>
 <!-- Tab navbar -->

<body >

<?php include 'layout/navbar.php';?>

<div class="container-form">
    <h2>Formulir Jurnal</h2>
    <form>
        <label for="name">Nama <span style="color: red;"></span></label>
        <input type="text" id="name" name="name" class="input-form1" required>

        <label for="asal">Asal <span style="color: red;"></span></label>
        <input type="text" id="asal" name="asal" class="input-form1" required>

        <label for="tanggal">Tanggal <span style="color: red;"></span></label>
        <input type="date" id="tanggal" name="tanggal" required>
        <p id="tanggal-terformat"></p> <!-- Elemen untuk menampilkan tanggal terformat -->

        <div class="checkbox-grid">
            <div >
                <label><input type="checkbox" name="ibadah[]" value="Subuh on time"> Subuh on time</label>

                <label><input type="checkbox" name="ibadah[]" value="Zuhur on time"> Zuhur on time</label>

                <label><input type="checkbox" name="ibadah[]" value="Asar on time"> Asar on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Magrib on time"> Magrib on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Isya on time"> Isya on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Tahajud"> Tahajud</label>

            

                <label><input type="checkbox" name="ibadah[]" value="Sholat Fajr"> Qobliyah Subuh</label>
                   <label><input type="checkbox" name="ibadah[]" value="Dhuha"> Dhuha</label>
                <label><input type="checkbox" name="ibadah[]" value="Qobliyah"> Qobliyah zuhur</label>
                <label><input type="checkbox" name="ibadah[]" value="Ba'diyah zuhur"> Ba'diyah zuhur</label>


               
          
            </div>
            <div>
            <label><input type="checkbox" name="ibadah[]" value="Sedekah Subuh"> Sedekah Subuh</label>
            <label><input type="checkbox" name="ibadah[]" value="Tilawah pagi"> Tilawah pagi</label>
                <label><input type="checkbox" name="ibadah[]" value="Zikir pagi"> Zikir pagi</label>
                <label><input type="checkbox" name="ibadah[]" value="Tilawah malam"> Tilawah malam</label>
                <label><input type="checkbox" name="ibadah[]" value="Baca Al Waqi'ah"> Baca Al Waqi'ah</label>
                <label><input type="checkbox" name="ibadah[]" value="Baca Al Mulk"> Baca Al Mulk</label>
                <label><input type="checkbox" name="ibadah[]" value="Berhalangan"> Berhalangan</label>
                <label><input type="checkbox" name="ibadah[]" value="Mendoakan orang lain"> Mendoakan orang lain</label>

            </div>
        </div>

        <button type="submit" class="tombol1">Submit</button>
        <button type="button" class="cancel-button">Cancel</button>
    </form>
</div>



<!-- Tab Bar -->
<?php include 'layout/tab.php';?>

<!-- tab js -->
<script src="../../public/js/tab.js"></script>


<!-- Muat file JavaScript dari folder /public/js -->
<script src="/js/scripts.js"></script>



</body>
</html>
