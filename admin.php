<?php
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - MAHESWARI JEWELLERS</title>
</head>
<body>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: rgb(255, 250, 239);
            text-align: center;
        }

        body a {
            text-decoration: none;
            font-size: 20px;
            text-align: center;
            color: white;
            padding: 20px 40px;
            margin: 5px;
            border: 2px solid rgb(32, 4, 4);
            background-color: rgb(32,4,4);
        }

        body img {
            display: block;
            margin: auto;
            width: 280px;
            height: 250px;
        }

    </style>
    <img src="images/mj-g-final.png" alt="">
    <h2>UPLOAD PHOTOS</h2>
    <a href="gold_upload.php">GOLD PHOTOS</a>
    <a href="silver_upload.php">SILVER PHOTOS</a>

    <h2>DELETE PHOTOS</h2>
    <a href="gold_delete_photos.php"></a>
</body>
</html>


