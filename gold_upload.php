<?php
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOLD UPLOAD - MAHESWARI JEWELLERS</title>
</head>
<body>

    <h2>GOLD UPLOAD</h2>
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

        <input type="file" name="image[]" multiple>
        <input type="submit" name="photo_submit" value="UPLOAD" class="upload">

    </form>

    <br>
    <br>
    <br>
    <a href="admin.php">BACK</a>
    
    <?php

if(isset($_POST['photo_submit']) && isset($_POST['pid']))
{
    $pid = $_POST['pid'];
    $directory = '';
    switch($pid)
    {
        case 1: $directory = "earrings/"; break;
        case 2: $directory = "chokers/"; break;
        case 3: $directory = "bangles/"; break;
        case 4: $directory = "chains/"; break;
        case 5: $directory = "necklace/"; break;
        case 6: $directory = "bracelets/"; break;
        case 7: $directory = "pendants/"; break;
        case 8: $directory = "fingerrings/"; break;
        case 9: $directory = "gsindoor/"; break;
        case 9: $directory = "gidols/"; break;

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