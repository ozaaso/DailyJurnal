<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Layout</title>
    <style>
        /* General styling for the body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Profile container */
        .profile-container {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            width: 300px;
            height: 150px;
            background-color: #fff;
            border-radius: 10px;
            padding: 10px;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Avatar - positioned top-left */
        .avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            position: absolute;
            top: 10px;
            left: 10px;
            object-fit: cover;
        }

        /* Name - positioned bottom-left */
        .name {
            position: absolute;
            bottom: 10px;
            left: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        /* Right-side container for origin and date */
        .info-right {
            position: absolute;
            right: 10px;
            text-align: right;
            top: 10px;
        }

        /* Styling for the origin (aligned with the top-right) */
        .origin {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        /* Styling for the date (under the origin) */
        .date {
            font-size: 12px;
            color: #999;
        }

    </style>
</head>
<body>

<div class="profile-container">
    <!-- Avatar -->
    <img src="https://cdn-icons-png.flaticon.com/512/147/147144.png" alt="Avatar" class="avatar">

    <!-- Name in the bottom left -->
    <div class="name">
        <p>John Doe</p>
    </div>

    <!-- Origin and Date in the right section -->
    <div class="info-right">
        <p class="origin">New York, USA</p>
        <p class="date">September 22, 2024</p>
    </div>
</div>

</body>
</html>
