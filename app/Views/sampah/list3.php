<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muthoba'ah Harian - List View</title>
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
            font-size: 14px;
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
        .list-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .list-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }
        .list-item:last-child {
            border-bottom: none;
        }
        .list-icon {
            width: 50px;
            height: 50px;
            background-color: #e0e0e0;
            border-radius: 8px;
            margin-right: 15px;
        }
        .list-details {
            flex-grow: 1;
        }
        .list-details p {
            margin: 0;
            font-size: 16px;
        }
        .list-details span {
            display: block;
            font-size: 12px;
            color: #888;
        }
        .options {
            font-size: 18px;
            cursor: pointer;
            color: #888;
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
    </div>
</div>

<div class="container">
    <div class="list-container">
        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details">
                <p>2</p>
                <span>Tuesday, January 2, 2024</span>
            </div>
            <div class="options">...</div>
        </div>

        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details">
                <p>q</p>
                <span>Tuesday, January 2, 2024</span>
            </div>
            <div class="options">...</div>
        </div>

        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details">
                <p>a</p>
                <span>Tuesday, January 2, 2024</span>
            </div>
            <div class="options">...</div>
        </div>

        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details">
                <p>f</p>
                <span>Tuesday, January 2, 2024</span>
            </div>
            <div class="options">...</div>
        </div>

        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details">
                <p>Bunaiyyah</p>
                <span>Monday, November 27, 2023</span>
            </div>
            <div class="options">...</div>
        </div>

        <div class="list-item">
            <div class="list-icon"></div>
            <div class="list-details">
                <p>Ummu Aliya</p>
                <span>Monday, November 27, 2023</span>
            </div>
            <div class="options">...</div>
        </div>
    </div>
</div>

</body>
</html>
