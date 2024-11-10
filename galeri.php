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


    
        <section class="galeri" id="galeriSection">
            <div class="container">
                <div class="sectionTitle">GALERİ</div>

                <div class="galeriContainer">
                    <div class="item">

                        <img src="images/gallery/1.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/2.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/3.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/4.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/5.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/6.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/7.jpg" alt="">
                    </div>
                    <!-- item end -->

                    <div class="item">
                         
                        <img src="images/gallery/8.jpg" alt="">
                    </div>
                    <!-- item end -->
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