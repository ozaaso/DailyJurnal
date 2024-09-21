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
<!-- Orange Banner -->
<div class="orange-banner"></div>

<!-- Profile -->
<div class="profile">
    <img src="https://via.placeholder.com/100" alt="Profile Image">
    <h2>Kusmiasih</h2>
    <p>Bekasi</p>
</div>

<!-- Date -->
<div class="date">
    Minggu, 26 November 2023
</div>

<!-- Checklist -->
<div class="checklist-container">
    <!-- Kolom Pertama -->
    <div class="checklist">
        <div class="checklist-item"><input type="checkbox"> <span>1. Tahajud</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>2. Subuh on time</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>3. Qobliyah subuh</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>4. Tilawah pagi</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>5. Zikir pagi (Al Ma'tsurat)</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>6. Sedekah subuh</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>7. Dhuha</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>8. Mendoakan org lain</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>9. Zuhur on time</span></div>
    </div>

    <!-- Kolom Kedua -->
    <div class="checklist">
        <div class="checklist-item"><input type="checkbox"> <span>10. Qobliyah (sebelum zuhur)</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>11. Ba'diyah zuhur (setelah zuhur)</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>12. Asar on time</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>13. Magrib on time</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>14. Tilawah malam</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>15. Isya on time</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>16. Baca Al Waqi'ah bisa malam(pagi)</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>17. Baca Al Mulk</span></div>
        <div class="checklist-item"><input type="checkbox"> <span>18. Berhalangan</span></div>
    </div>
</div>


<!-- Tab Bar -->
<?php include 'layout/tab.php';?>

<!-- tab js -->
<script src="../../public/js/tab.js"></script>


<!-- Link ke file JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
