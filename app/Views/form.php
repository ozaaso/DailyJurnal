<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Form</title>
    <!-- Muat file CSS dari folder /public/css -->
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body class="form-page">

<div class="container">
    <h2>Formulir Jurnal</h2>
    <form>
        <label for="name">Nama <span style="color: red;"></span></label>
        <input type="text" id="name" name="name" required>

        <label for="asal">Asal <span style="color: red;"></span></label>
        <input type="text" id="asal" name="asal" required>

        <label for="tanggal">Tanggal <span style="color: red;"></span></label>
        <input type="date" id="tanggal" name="tanggal" required>
        <p id="tanggal-terformat"></p> <!-- Elemen untuk menampilkan tanggal terformat -->

        <div class="checkbox-grid">
            <div>
                <label><input type="checkbox" name="ibadah[]" value="Tahajud"> Tahajud</label>
                <label><input type="checkbox" name="ibadah[]" value="Subuh on time"> Subuh on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Sholat Fajr"> Sholat Fajr / Qobliyah Subuh</label>
                <label><input type="checkbox" name="ibadah[]" value="Tilawah pagi"> Tilawah pagi</label>
                <label><input type="checkbox" name="ibadah[]" value="Zikir pagi"> Zikir pagi (Al Ma'tsurat)</label>
                <label><input type="checkbox" name="ibadah[]" value="Sedekah Subuh"> Sedekah Subuh</label>
                <label><input type="checkbox" name="ibadah[]" value="Dhuha"> Dhuha</label>
                <label><input type="checkbox" name="ibadah[]" value="Mendoakan orang lain"> Mendoakan orang lain</label>
                <label><input type="checkbox" name="ibadah[]" value="Zuhur on time"> Zuhur on time</label>
            </div>
            <div>
                <label><input type="checkbox" name="ibadah[]" value="Qobliyah"> Qobliyah (sebelum zuhur)</label>
                <label><input type="checkbox" name="ibadah[]" value="Ba'diyah zuhur"> Ba'diyah zuhur (setelah zuhur)</label>
                <label><input type="checkbox" name="ibadah[]" value="Asar on time"> Asar on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Magrib on time"> Magrib on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Tilawah malam"> Tilawah malam</label>
                <label><input type="checkbox" name="ibadah[]" value="Isya on time"> Isya on time</label>
                <label><input type="checkbox" name="ibadah[]" value="Baca Al Waqi'ah"> Baca Al Waqi'ah (pagi/malam)</label>
                <label><input type="checkbox" name="ibadah[]" value="Baca Al Mulk"> Baca Al Mulk</label>
                <label><input type="checkbox" name="ibadah[]" value="Berhalangan"> Berhalangan</label>
            </div>
        </div>

        <button type="submit">Submit</button>
        <button type="button" class="cancel-button">Cancel</button>
    </form>
</div>

<!-- Muat file JavaScript dari folder /public/js -->
<script src="/js/scripts.js"></script>

</body>
</html>
