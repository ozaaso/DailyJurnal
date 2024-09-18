<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muthoba'ah Harian</title>
    <!-- Link Bootstrap CSS untuk styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .header {
            padding: 10px;
            text-align: center;
        }

        .orange-banner {
            background-color: #f8b74a;
            height: 100px;
        }

        .profile {
            margin-top: -50px;
            text-align: center;
        }

        .profile img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            border: 3px solid white;
            object-fit: cover;
        }

        .profile h2 {
            margin: 10px 0 5px 0;
            font-size: 24px;
        }

        .profile p {
            margin: 0;
            color: gray;
        }

        .date {
            text-align: center;
            margin: 20px 0;
            color: gray;
            font-size: 14px;
        }

        .checklist-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px auto;
            max-width: 800px;
        }

        .checklist {
            flex: 1;
            padding: 20px;
        }

        .checklist-item {
            margin: 10px 0;
        }

        .checklist-item span {
            margin-left: 5px;
        }

        input[type="checkbox"] {
            accent-color: #f8b74a; /* Warna orange saat checkbox dicentang */
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="header">
    <button class="btn btn-outline-secondary">Muthoba'ah Harian</button>
    <button class="btn btn-outline-secondary">list</button>
</div>

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

<!-- Link ke file JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
