<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page - Maheswari Jewellers</title>
    <link rel="stylesheet" href="style.css?version=5.0">
    <link rel="icon" href="images/mj-g-final.png" type="image/x-icon">
</head>
<body>

    <header>
        <div class="menu-items">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <img src="images/menu-bars.png" alt="">
            </label>
            <a href="index.php" class="logo">Maheswari Jewellwers</a>
            <ul>
                <li class="li-active"><a href="index.php" >HOME</a></li>
                <li><a href="index.php?#products">PRODUCTS</a></li>
                <li><a href="">ABOUT</a></li>
            </ul>
            <a href="https://api.whatsapp.com/send?phone=919989016050&text=Hi%20Suguna,%20I%20want%20to%20know%20more%20about%20your%20products" class="wapp" target="_blank"><img src="images/whatsapp.png" alt=""></a>
        </div>
    </header>

    <div class="our-products">
        <?php
            $pname="NOT VALID";
            if(isset($_GET['pid']))
            {
                $pid = $_GET['pid'];
                switch($pid)
                {
                    case 1: $pname = "EARRINGS"; break;
                    case 2: $pname = "CHOKERS"; break;
                    case 3: $pname = "BANGLES"; break;
                    case 4: $pname = "CHAINS"; break;
                    case 5: $pname = "NECKLACE"; break;
                    case 6: $pname = "BRACELETS"; break;
                    case 7: $pname = "PENDANTS"; break;
                    case 8: $pname = "FINGER RINGS"; break;
                    case 9: $pname = "SINDOOR BOXES"; break;
                    case 10: $pname = "IDOLS"; break;

                    default: $pname = "DEFAULT";
                }
            }elseif(isset($_GET['sid'])){
                $sid = $_GET['sid'];
                switch($sid)
                {
                    case 1: $pname = "IDOLS"; break;
                    case 2: $pname = "DIYAS"; break;
                    case 3: $pname = "GLASSES"; break;
                    case 4: $pname = "BOWLS"; break;
                    case 5: $pname = "SILVER POTS"; break;
                    case 6: $pname = "CUTLERY"; break;
                    case 7: $pname = "GIFT ARTICLES"; break;
                    //case 8: $pname = "RINGS"; break;

                    default: $pname = "DEFAULT";
                }
            }

            echo '<h1>'.$pname.'</h1>';
        ?>
        <p>For Any Queries, You can Contact us through Whatsapp.</p>
    </div>

    <div class="wrap-back">
        <div class="product-div-con">

        <?php

        if(isset($_GET['pid']))
            {
                $pid = $_GET['pid'];
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

                $files1 = scandir($directory);
                $num_files = count($files1);
                // two default . ..
                $i = 2;
                for($i=2; $i<$num_files; $i++)
                {
                    $dir_img = $directory.$files1[$i];
                    $proid='pro-'.$i;
                    echo '<div onclick="fullview(\''.$proid.'\')" class="product-div">
                        <div class="product-border">
                            <img src="'.$dir_img.'" alt="">
                        </div>
                        </div>';
                    
                    echo '<div class="full-view" id="'.$proid.'" style="display: none">
                        <div onclick="cancelview(\''.$proid.'\')" class="cancel">
                            <h2>Maheswari Jewellers</h2>
                            <img src="images/cancel.png" alt="">
                        </div>
                        <img src="'.$dir_img.'" alt="">
                        <h1>For Orders and Queries, Contact us through Whatsapp.</h1>
                    </div>';
                }
            }
        elseif(isset($_GET['sid']))
            {
                $sid = $_GET['sid'];
                $directory = '';
                switch($sid)
                {
                case 1: $directory = "idols/"; break;
                case 2: $directory = "diyas/"; break;
                case 3: $directory = "glasses/"; break;
                case 4: $directory = "bowls/"; break;
                case 5: $directory = "spots/"; break;
                case 6: $directory = "scutlery/"; break;
                case 7: $directory = "sgift/"; break;
                //case 8: $directory = "fingerrings/"; break;

                }

                $files1 = scandir($directory);
                $num_files = count($files1);
                // two default . ..
                $i = 2;
                for($i=2; $i<$num_files; $i++)
                {
                    $dir_img = $directory.$files1[$i];
                    $proid='pro-'.$i;
                    echo '<div onclick="fullview(\''.$proid.'\')" class="product-div">
                        <div class="product-border">
                            <img src="'.$dir_img.'" alt="">
                        </div>
                        </div>';
                    
                    echo '<div class="full-view" id="'.$proid.'" style="display: none">
                        <div onclick="cancelview(\''.$proid.'\')" class="cancel">
                            <h2>Maheswari Jewellers</h2>
                            <img src="images/cancel.png" alt="">
                        </div>
                        <img src="'.$dir_img.'" alt="">
                        <h1>For Orders and Queries, Contact us through Whatsapp.</h1>
                    </div>';
                }
            }
        else {
            echo "<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Try going to HOME or <br><br>Please Contact the Administrator !!</h1>";
        }

        ?>

        <script type="text/javascript">
            function fullview(proid){
                document.getElementById(proid).style.display = "block";
            }

            function cancelview(proid){
                document.getElementById(proid).style.display = "none";
            }
        </script>

        </div>
    </div>

    <div class="our-products">
        <h1>OTHER GOLD PRODUCTS</h1>
    </div>

    <div class="wrap-back">
        <div class="other-pro-con">
            <?php
            if(isset($_GET['pid']))
                {
                    $pid = $_GET['pid'];
                    echo '<style>
                        .div-'.$pid.' {
                            display:none;
                        }
                    </style>';
                }
            ?>


            <div class="other-pro div-1">
                <div class="other-border">
                    <a href="products.php?pid=1"><h1>Earrings</h1></a>
                </div>
            </div>

            <div class="other-pro div-2">
                <div class="other-border">
                    <a href="products.php?pid=2"><h1>Choker</h1></a>
                </div>
            </div>

            <div class="other-pro div-3">
                <div class="other-border">
                    <a href="products.php?pid=3"><h1>Bangles</h1></a>
                </div>
            </div>

            <div class="other-pro div-4">
                <div class="other-border">
                    <a href="products.php?pid=4"><h1>Chains</h1></a>
                </div>
            </div>

            <div class="other-pro div-5">
                <div class="other-border">
                    <a href="products.php?pid=5"><h1>Necklace</h1></a>
                </div>
            </div>

            <div class="other-pro div-6">
                <div class="other-border">
                    <a href="products.php?pid=6"><h1>Bracelet</h1></a>
                </div>
            </div>

            <div class="other-pro div-7">
                <div class="other-border">
                      <a href="products.php?pid=7"><h1>Pendants</h1></a>
                </div>
            </div>

            <div class="other-pro div-8">
                <div class="other-border">
                      <a href="products.php?pid=8"><h1>Finger rings</h1></a>
                </div>
            </div>

            <div class="other-pro div-9">
                <div class="other-border">
                    <a href="products.php?pid=9"><h1>Sindoor Box</h1></a>
                </div>
            </div>

            <div class="other-pro div-10">
                <div class="other-border">
                    <a href="products.php?pid=10"><h1>Idols</h1></a>
                </div>
            </div>

        </div>
    </div>

    <div class="our-products">
        <h1>OTHER SILVER PRODUCTS</h1>
    </div>

    <div class="wrap-back">
        <div class="other-pro-con">
            
            <?php
            
            if(isset($_GET['sid']))
                {
                    $pid = $_GET['sid'];
                    echo '<style>
                        .sdiv-'.$pid.' {
                            display:none;
                        }
                    </style>';
                }
            ?>

            <div class="other-pro sdiv-1">
                <div class="other-border">
                    <a href="products.php?sid=1"><h1>Idols</h1></a>
                </div>
            </div>

            <div class="other-pro sdiv-2">
                <div class="other-border">
                    <a href="products.php?sid=2"><h1>Diyas</h1></a>
                </div>
            </div>

            <div class="other-pro sdiv-3">
                <div class="other-border">
                    <a href="products.php?sid=3"><h1>Glasses</h1></a>
                </div>
            </div>

            <div class="other-pro sdiv-4">
                <div class="other-border">
                    <a href="products.php?sid=4"><h1>Bowls</h1></a>
                </div>
            </div>

            <div class="other-pro sdiv-5">
                <div class="other-border">
                    <a href="products.php?sid=5"><h1>Silver Pots</h1></a>
                </div>
            </div>

            <div class="other-pro sdiv-6">
                <div class="other-border">
                    <a href="products.php?sid=6"><h1>Cutlery</h1></a>
                </div>
            </div>
            
            <div class="other-pro sdiv-7">
                <div class="other-border">
                      <a href="products.php?sid=7"><h1>Gift Articles</h1></a>
                </div>
            </div>
            
            <!--
            <div class="other-pro sdiv-8">
                <div class="other-border">
                      <a href="products.php?sid=8"><h1>Finger rings</h1></a>
                </div>
            </div>
            -->

        </div>
    </div>

    <div class="our-products">
        <h1>JOIN OUR GROUPS</h1>
        <p>For Updated Products, You can join our Whatsapp Groups.</p>
    </div>

    <div class="wrap-back">
        <div class="groups-con">
            <div class="group">
                <a href="https://chat.whatsapp.com/3g0rD9q0G9eCjL3FhZ9x70">Gold Jewellery<br>Group</a>
            </div>
            <div class="group">
                <a href="https://chat.whatsapp.com/JH4ExdA3fgb94AEcF3pxnC">Silver Jewellery<br>Group</a>
            </div>
            <div class="group">
                <a href="https://chat.whatsapp.com/JNPf79Rq7UJJkYlxuzBGry">Immitation <br>Jewellery</a>
            </div>
        </div>
    </div>

    <footer>
        <div class="logo-div">
            <img src="images/mj-g-final.png" alt="">
        </div>
        <div class="name-social">
            <div class="name-div">
                <h1>MAHESWARI JEWELLERS</h1>
            </div>
            <div class="call-div">
                <h2>+91 9989016050</h3>
            </div>
            <div class="social-div">
                <a href="https://www.instagram.com/invites/contact/?i=163p5evo8tcq3&utm_content=3jttkrj"><img src="images/instagram.png" alt=""></a>
                <a href="https://www.facebook.com/Maheshwari-Jewellers-255815721629666/"><img src="images/facebook.png" alt=""></a>
                <a href="https://youtu.be/OmJbrsr4vnc"><img src="images/youtube.png" alt=""></a>
            </div>
        </div>
    </footer>



</body>
</html>
