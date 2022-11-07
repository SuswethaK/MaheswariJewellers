<?php
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLD DELETE - MAHESWARI JEWELLERS</title>
</head>
<body>

    <h2>GOLD PHOTOS (DELETE)</h2>
    <h3 style="color:red;margin:0">Max 10 Photos</h3>
    <style>

         body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            background-color: rgb(255, 250, 239);
        }

        body form {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        body form select {
            padding: 10px 20px;
            font-size: 14px;
            margin: 20px 0;
            background-color: rgb(255, 250, 239);
        }

        body form input {
            margin: 10px 0;
        }

        .upload {
            color: white;
            background-color: rgb(32,4,4);
            font-size: 16px;
            padding: 10px 20px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: rgb(32,4,4);
            font-size: 16px;
            padding: 10px 20px;
            position: fixed;
            bottom: 50px;
        }


    </style>

    <form action="delete_photos.php" method="post" enctype="multipart/form-data">

        <select name="pid">
            <option value="1">Earrings</option>
            <option value="2">Chokers</option>
            <option value="3">Bangles</option>
            <option value="4">Chains</option>
            <option value="5">Necklace</option>
            <option value="6">Bracelets</option>
            <option value="7">Pendants</option>
            <option value="8">Finger rings</option>
            <option value="9">Sindoor Box</option>
            <option value="10">Idols</option>
        </select>

        <input type="submit" name="cat_submit" value="DELETE" class="upload">

    </form>

    <br>
    <br>
    <br>
    <a href="admin.php">BACK</a>
    
    <?php



?>

</body>
</html>