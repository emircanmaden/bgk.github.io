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

    <div class="banner" id="home">
        <button id="prevBtn" class="slider-btn">❮</button>
        <button id="nextBtn" class="slider-btn">❯</button>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php"><img src="images/BGK.png" alt="BGK Logo"></a>
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
                        <li class="kurumsal-icon">
                        <a href="kurumsal.php"><img src="images/kurumsal.png" class="icon-white"></a>
                    </li>
                    </ul>
                </nav>
            </div>
        </header>

      

        <div class="container">
            <h1>Birlikte <span>Hayat Kurtarabiliriz</span></h1>
            <p>
                Geniş kitlelere ulaşırız. Şubelerimiz, BGK Danışmanlık Merkezlerimiz, gönüllülerimiz ve Ülke BGK
                topluluğumuz ile toplumun her kesiminde ve tüm yaşam alanlarında varız.
            </p>
            <button onclick="window.location.href='programs.php';">
                Bağış Yap
            </button>
            <button onclick="window.location.href='programs.php';" id="bagis">
                Gönüllü Ol
            </button>


        </div>
    </div>


    <footer class="main-footer">
        <p class="cptext">&copy; 2024 Company BGK. All rights reserved.</p>

        <ul class="fa-brands">
            <li class="instagram"><a href=""><img src="images/instagram.png" alt="Instagram"></a></li>
            <li class="twitter"><a href=""><img src="images/x.png" alt="Twitter"></a></li>
            <li class="wp"><a href=""><img src="images/wp.png" alt="WhatsApp"></a></li>
        </ul>
    </footer>

    <script src="js/loading.js"></script>
    <script src="js/sliderButton.js"></script>


</body>

</html>