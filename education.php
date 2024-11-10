<?php
session_start();

// Oturum kontrolü yap
if (!isset($_SESSION['giris_yapildi']) || $_SESSION['giris_yapildi'] !== true) {
    // Giriş yapılmamışsa giris.php'ye yönlendir
    header("Location: giris.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png" />
    <title>Bağışla Geleceği Kur</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
<div id="loading">
  <img src="images/loading.gif" alt="Yükleniyor..." />
</div> 
    
<header>
        <div class="container">
            <div class="logo">
                <a href="index.php" ><img src="images/BGK.png" alt="BGK Logo"></a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="index.php">Anasayfa</a>
                    </li>
                    <li>
                        <a href="programs.php">Programlar</a>
                    </li>
                    <li>
                        <a href="education.php">Eğitim</a>
                    </li>
                    <li>
                        <a href="galeri.php">Galeri</a>
                    </li>
                    <li>
                        <a href="about.php">Hakkımızda</a>
                    </li>
                    <li>
                        <a href="iletisim.php">İletişim</a>
                    </li>
                    <li>
                        <a href="cikis.php" class="cikis">Çıkış Yap</a>
                    </li>
                    </li>
                        <li class="kurumsal-icon">
                        <a href="kurumsal.php"><img src="images/kurumsal.png" class="icon-white"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>




    <section class="education" id="educationSection">

        <video autoplay muted loop class="videoPlayer">
            <source src="video/childrens.mp4" type="video/mp4" />

        </video>

        <div class="container">
            <div class="sectionTitle">EĞİTİM</div>

            <div class="educationContainer">
                <h3>
                    DAHA İYİ BİR GELECEK İÇİN <br />
                    <strong> EĞİTİM ŞARTTIR </strong>
                </h3>
                <p>
                    Eğitim, bireylerin kendini geliştirmesi ve topluma katkı sağlayabilmesi için en güçlü araçtır. Daha
                    iyi bir gelecek, ancak her çocuğun eşit fırsatlarla kaliteli eğitime erişmesiyle mümkündür. Bizler,
                    eğitimle çocukların hayallerini gerçeğe dönüştürmek ve onları geleceğe en iyi şekilde hazırlamak
                    için çalışıyoruz. Her bireyin hak ettiği eğitimi alarak güçlü bir topluma katılması, sürdürülebilir
                    bir gelişimin anahtarıdır.
                </p>

                <a href="galeri.php"><button>Galeri</button></a>
            </div>
        </div>
    </section>


    <footer class="main-footer">
        <p class="cptext">&copy; 2024 Company BGK. All rights reserved.</p>

        <ul class="fa-brands">
            <li class="instagram"><a href=""><img src="images/instagram.png" alt="Instagram"></a></li>
            <li class="twitter"><a href=""><img src="images/x.png" alt="Twitter"></a></li>
            <li class="wp"><a href=""><img src="images/wp.png" alt="WhatsApp"></a></li>
        </ul>
    </footer>

    <script src="js/loading.js"></script>


</body>

</html>