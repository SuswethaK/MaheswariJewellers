<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Photos</title>
</head>
<body>

<?php

if(isset($_POST['sid']) || isset($_POST['sid']))
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
        case 10: $directory = "gidols/"; break;

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