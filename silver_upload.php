<?php
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILVER UPLOAD - MAHESWARI JEWELLERS</title>
</head>
<body>

    <h2>SILVER UPLOAD</h2>
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

    <form action="" method="post" enctype="multipart/form-data">

        <select name="sid">
            <option value="1">IDOLS</option>
            <option value="2">DIYAS</option>
            <option value="3">GLASSES</option>
            <option value="4">BOWLS</option>
            <option value="5">SILVER POTS</option>
            <option value="6">CUTLERY</option>
            <option value="7">GIFT ARTICLES</option>
        </select>

        <input type="file" name="image[]" multiple>
        <input type="submit" name="photo_submit" value="UPLOAD" class="upload">

    </form>

    <br>
    <br>
    <br>
    <a href="admin.php">BACK</a>
    
    <?php

if(isset($_POST['photo_submit']) && isset($_POST['sid']))
{
    $pid = $_POST['sid'];
    $directory = '';
    switch($pid)
    {
        case 1: $directory = "idols/"; break;
        case 2: $directory = "diyas/"; break;
        case 3: $directory = "glasses/"; break;
        case 4: $directory = "bowls/"; break;
        case 5: $directory = "spots/"; break;
        case 6: $directory = "scutlery/"; break;
        case 7: $directory = "sgift/"; break;

    }

    $fileCount = count($_FILES['image']['name']);
    if($fileCount != 0 && $fileCount <= 10)
    {
      for ($i=0; $i < $fileCount ; $i++)
      {
        $name = $_FILES['image']['name'][$i];
        $path = $directory.$name;

        if(file_exists($_FILES['image']['tmp_name'][$i]))
        {
        echo "File Uploaded to ".$directory;
        }
        else
        {
        echo "File upload failed";
        exit();
        }

        move_uploaded_file($_FILES['image']['tmp_name'][$i], $path);

        //header("Location: admin.php?photo=success");
      }
      exit();
    }
    else 
    {
      echo '<script> alert("Please Select Upto 10 Photos (MAX = 10)!!") </script>';
    }
  }

?>

</body>
</html>