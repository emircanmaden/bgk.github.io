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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
                    <li class="kurumsal-icon">
                        <a href="kurumsal.php"><img src="images/kurumsal.png" class="icon-white"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>




<!-- Kurumsal Bilgi Bölümü -->
<section class="section-intro">
    <div class="sectionTitleKurumsal">KURUMSAL LOGOMUZ</div>
    <p>
        Bağış ve gönüllülük alanında, toplumun çeşitli kesimlerine yardım ulaştırmayı hedefleyen organizasyonumuzun logusu, <strong class="yesil">#38b50e</strong> yeşil ve <strong class="beyaz">#efefef</strong> beyaz renk kodlarını barındırmaktadır. Yeşil renk, umut ve hayatı simgelerken, beyaz renk saf ve temiz niyetlerimizi temsil etmektedir.
        Logomuz, yardımseverliğin ve toplumsal dayanışmanın sembolü olarak her alanda kullanıma açıktır. Ancak, logo ve ismin izinsiz kullanımlarının tespiti durumunda yasal haklarımız saklıdır. Kamuoyuna önemle duyurulur.
    </p>
    <img src="images/BGK.png" alt="BGK LOGO">

<section class="documents">
    <h3>Dökümanlar</h3>
    <div class="documents-list">
        <div class="document-item">
            <a href="images/BGK.png" class="document-button">Logomuz</a>
        </div>
        <div class="document-item">
            <a href="images/banner2.png" class="document-button">Bannerımız</a>
        </div>
    </div>
</section>
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