<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muthoba'ah Harian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .navbar-left {
            display: flex;
            align-items: center;
        }
        .navbar-left button {
            border: none;
            background: none;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }
        .navbar-left .icon-list {
            margin-left: 10px;
            cursor: pointer;
            color: #555;
        }
        .navbar-right {
            display: flex;
            align-items: center;
        }
        .search-box input {
            padding: 10px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 20px;
        }
        .add-btn {
            background-color: #FFC488;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-weight: bold;
        }
        .date {
            font-weight: bold;
            color: #333;
            margin-top: 40px;
            margin-bottom: 20px;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 150px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            text-align: left;
            overflow: hidden;
            position: relative;
        }
        .card-header {
            background-color: #FFE7C6;
            width: 100%;
            height: 60px;
            position: relative;
        }
        .card-options {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }
        .card-content {
            padding: 10px;
        }
        .card-content p {
            margin: 0;
            line-height: 1.4;
        }
        .card-content p.name {
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }
        .card-content p.location {
            font-size: 12px;
            color: gray;
        }
        .context-menu {
            display: none;
            position: absolute;
            top: 30px;
            right: 10px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 5px 0;
            z-index: 100;
        }
        .context-menu a {
            display: block;
            padding: 5px 10px;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }
        .context-menu a:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="navbar-left">
        <button>Muthoba'ah Harian</button>
        <span class="icon-list">list</span>
    </div>
    <div class="navbar-right">
        <div class="search-box">
            <input type="text" placeholder="Search">
        </div>
        <button class="add-btn">+ Add</button>
    </div>
</div>

<div class="container">
    <h1>Muthoba'ah Harian</h1>

    <div class="date">Monday, November 27, 2023</div>
    <div class="cards">
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
            <div class="card-content">
                <p class="name">Bunaiyyah</p>
                <p class="location">Pinrang Sulsel</p>
            </div>
            <div class="context-menu">
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
            <div class="card-content">
                <p class="name">Ummu Aliya</p>
                <p class="location">Bekasi</p>
            </div>
            <div class="context-menu">
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </div>
        </div>
    </div>

    <div class="date">Sunday, November 26, 2023</div>
    <div class="cards">
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
            <div class="card-content">
                <p class="name">Nani Sihmiati</p>
                <p class="location">Lampung</p>
            </div>
            <div class="context-menu">
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
            <div class="card-content">
                <p class="name">Lina Pujiastuti</p>
                <p class="location">Lampung</p>
            </div>
            <div class="context-menu">
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <span class="card-options" onclick="toggleContextMenu(this)">&#x22EE;</span>
            </div>
            <div class="card-content">
                <p class="name">Sri Cahyati</p>
                <p class="location">Kebumen</p>
            </div>
            <div class="context-menu">
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleContextMenu(element) {
        // Dapatkan menu konteks di dalam kartu yang relevan
        const contextMenu = element.parentElement.nextElementSibling.nextElementSibling;
        if (contextMenu.style.display === 'block') {
            contextMenu.style.display = 'none';
        } else {
            closeAllContextMenus();
            contextMenu.style.display = 'block';
        }
    }

    function closeAllContextMenus() {
        // Tutup semua menu konteks yang terbuka
        const menus = document.querySelectorAll('.context-menu');
        menus.forEach(menu => menu.style.display = 'none');
    }

    // Tutup menu konteks saat mengklik di luar
    document.addEventListener('click', function(event) {
        if (!event.target.matches('.card-options')) {
            closeAllContextMenus();
        }
    });
</script>

</body>
</html>
