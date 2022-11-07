<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.1">
    <link rel="icon" href="images/mj-g-final.png" type="image/x-icon">
    <title>Maheswari Jewellwers - Tenali</title>
    <script src="https://kit.fontawesome.com/adc44c1948.js" crossorigin="anonymous"></script>
    <script src="index.js" defer></script>

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
                <li class="li-active"><a href="" >HOME</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#aboutus">ABOUT</a></li>
            </ul>
            <a href="https://api.whatsapp.com/send?phone=919989016050&text=Hi%20Suguna,%20I%20want%20to%20know%20more%20about%20your%20products" class="wapp" target="_blank"><img src="images/whatsapp.png" alt=""></a>
        </div>
    </header>

    <div class="caurosel-con">

        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <div class="slide s1">
              <img src="images/img1_ban.jpg" alt="">
            </div>
            <div class="slide">
              <img src="images/img2_ban.jpg" alt="">
            </div>
            <div class="slide">
              <img src="images/img3_ban.jpg" alt="">
            </div>
        </div>

        <div class="bg-modal">
            <div class="bg-content">
                <h1>EVERY PIECE OF JEWELLERY<br>TELLS A STORY</h1>
                <h2>916 Designer Gold, Silver Jewellery Available</h2>

            </div>
            <div class="logo-con">
                <img src="images/mj-g-final.png" alt="">
            </div>
        </div>

        <div class="navigation">
            <label for="r1" class="bar active"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
        </div>
    </div>

    <div class="icons-box">

        <div class="icons-item">
            <i class="fas fa-search"></i><br><br>
            <h5>100%<br>Transparency</h5>
        </div>

        <div class="icons-item">
            <i class="fas fa-sync-alt"></i> <br><br>
            <h5>100% Buyback<br>& Satisfaction</h5>
        </div>

        <div class="icons-item">
            <i class="fas fa-pump-soap"></i> <br><br>
            <h5>Clean & Tidy<br>Ambience</h5>
        </div>

        <div class="icons-item">
            <i class="fas fa-heart"></i> <br><br>
            <h5>We love our<br>Customers</h5>
        </div>

    </div>

    <div id="products" class="our-products">
        <h1>OUR PRODUCTS</h1>
    </div>

    <ul class="tabs">
        <li data-tab-target="#gold" class="active tab">GOLD</li>
        <li data-tab-target="#silver" class="tab">SILVER</li>
    </ul>

    <div class="sub-content">

        <div id="gold" data-tab-content class="active">

            <div class="wrap-back">
                <div class="product-con">
                    <div class="photo div-1">
                        <div class="border">
                        <a href="products.php?pid=1"><h1>Earrings</h1></a>
                        </div>
                    </div>
                    <div class="photo div-2">
                        <div class="border">
                            <a href="products.php?pid=2"><h1>Chokers</h1></a>
                        </div>
                    </div>
                    <div class="photo div-3">
                        <div class="border">
                            <a href="products.php?pid=3"><h1>Bangles</h1></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-back">
                <div class="product-con">
                    <div class="photo div-4">
                        <div class="border">
                            <a href="products.php?pid=4"><h1>Chains</h1></a>
                        </div>
                    </div>
                    <div class="photo div-5">
                        <div class="border">
                            <a href="products.php?pid=5"><h1>Necklace</h1></a>
                        </div>
                    </div>
                    <div class="photo div-6">
                        <div class="border">
                            <a href="products.php?pid=6"><h1>Bracelet</h1></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-back">
                <div class="product-con">
                    <div class="photo div-7">
                        <div class="border">
                            <a href="products.php?pid=7"><h1>Pendants</h1></a>
                        </div>
                    </div>
                    <div class="photo div-8">
                        <div class="border">
                            <a href="products.php?pid=8"><h1>Finger Rings</h1></a>
                        </div>
                    </div>
                    <div class="photo div-9">
                        <div class="border">
                            <a href="products.php?pid=9"><h1>Sindoor Box</h1></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-back">
                <div class="product-con">

                    <div class="photo div-10">
                        <div class="border">
                            <a href="products.php?pid=10"><h1>Idols</h1></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div id="silver" data-tab-content>

            <div class="wrap-back">
                <div class="product-con">
                        <div class="photo sdiv-1">
                            <div class="border">
                            <a href="products.php?sid=1"><h1>Idols</h1></a>
                            </div>
                        </div>
                        <div class="photo sdiv-2">
                            <div class="border">
                                <a href="products.php?sid=2"><h1>Diyas</h1></a>
                            </div>
                        </div>
                        <div class="photo sdiv-3">
                            <div class="border">
                                <a href="products.php?sid=3"><h1>Glasses</h1></a>
                            </div>
                        </div>
                </div>
            </div>

            <div class="wrap-back">
                <div class="product-con">
                    <div class="photo sdiv-4">
                        <div class="border">
                            <a href="products.php?sid=4"><h1>Bowls</h1></a>
                        </div>
                    </div>
                    <div class="photo sdiv-5">
                        <div class="border">
                            <a href="products.php?sid=5"><h1>Silver Pots</h1></a>
                        </div>
                    </div>

                    <div class="photo sdiv-6">
                        <div class="border">
                            <a href="products.php?sid=6"><h1>Cutlery</h1></a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="wrap-back">
                <div class="product-con">
                    <div class="photo sdiv-7">
                        <div class="border">
                            <a href="products.php?sid=7"><h1>Gift Articles</h1></a>
                        </div>
                    </div>
                    <!--
                    <div class="photo sdiv-8">
                        <div class="border">
                            <a href="products.php?sid=8"><h1>Finger Rings</h1></a>
                        </div>
                    </div>
                    -->
                </div>
            </div>


        </div>

    </div>

    <div class="made-with-love">
        <h1>MADE WITH LOVE</h1>
        <h2>We sell readymade as well as take orders for customised Jewellery in gold. And in silver, ready-made items are available. To get more updates or to reach out in case of queries, please join our whatsapp groups with the links below. </h2>
    </div>

    <div id="aboutus" class="about-our-store">
      <div class="head-title" style="color:white">
            <h1> &mdash; About Our Store &mdash; </h1>
        </div>

        <div class="a-main-con">
            <div class="a-left-box">
                <img src="images/shop.jpg" alt="">
                <div class="small-box">
                    <h1>1+ Year</h1>
                    <hr>
                    <h2>5K+ customers</h2>
                </div>
            </div>
            <div class="a-right-box">
                <h3>About us</h3><br>
                <p> MAHESWARI JEWELLERS is a flagship outlet of Ms. Suguna. It was re-designed and established an year back in Tenali in Andhrapradesh.
                    Today, it has a strong customer network of over 500+ active smiles spread every month across the city.
                    <br>
                    MAHESWARI JEWELLERS has been actively helping others for customised ornaments and currently
                    ranks among the top 5 jewellery retailers in Tenali.
                    <br><br>
                    ADDRESS TO MAHESWARI JEWELLERS:<br>
                    7-36-1, Jain Temple St,<br>
                    Ganganamma Peta,<br>
                    Ramalingeswara Pet,<br>
                    Tenali,<br>
                    Andhra Pradesh 522201<br>
                    9989016050. <br>
                    </p>
            </div>

        </div>

    </div>

    <div class="our-products">
        <h1>JOIN OUR GROUPS</h1>
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
