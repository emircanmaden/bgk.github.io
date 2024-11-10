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
                    </li>
                        <li class="kurumsal-icon">
                        <a href="kurumsal.php"><img src="images/kurumsal.png" class="icon-white"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>





    <section class="contact">
        <div class="sectionTitle">İLETİŞİM</div>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3015.5830121604067!2d29.22733207550842!3d40.90296102590405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDU0JzEwLjciTiAyOcKwMTMnNDcuNyJF!5e0!3m2!1str!2str!4v1729460026296!5m2!1str!2str"
            loading="lazy"
            referrerpolicy="no-referrer-when-dowgrande"></iframe>
            <form>
                <h3>İLETİŞİME GEÇ</h3>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                        <input type="text" placeholder="Kullanıcı Adı" required/>
                    </div>
                
                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Mesaj" required/>
                    </div>
                
                <div class="inputBox">
                    <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Telefon" required/>
                    </div>
                <input type="submit" class="btn" placeholder="Gönder"/>
            </form>
        </div>
    </section>
    
    
    <!-- İletişim End -->

    <footer>
        <div class="container">

            <div class="newsLetterContainer">
                <img src="images/BGK.png" alt="BGK">
                <p>
                    Eğitim, daha iyi bir gelecek için en güçlü araçtır. Gelecek nesilleri güçlendirmek için birlikte çalışalım. Bizimle iletişime geçin ve dünyada bir fark yaratın.
                </p>
                <input type="text" placeholder="E-posta adresinizi girin">
            </div>
            <!-- newsLetterContainer End -->

            <div class="linksContainer">
                <div class="title">FAYDALI BAĞLANTILAR</div>
                <ul>
                    <li>
                        <a href="index.html">Anasayfa</a>
                    </li>
                    <li>
                        <a href="programs.html">Programlar</a>
                    </li>
                    <li>
                        <a href="education.html">Eğitim</a>
                    </li>
                    <li>
                        <a href="galeri.html">Galeri</a>
                    </li>
                    <li>
                        <a href="about.html">Hakkımızda</a>
                    </li>
                    <li>
                        <a href="iletisim.html">İletişim</a>
                    </li>
                </ul>
            </div>
            <!-- linksContainer End -->

            <div class="connectContainer">
                <div class="title">BİZİMLE İLETİŞİME GEÇİN</div>
                <p>
                    Kartal, İstanbul <br />
                    34860, Türkiye
                </p>
                <p>
                    info@bgk.com
                </p>
                <p>
                    (+90) 555 555 5555
                </p>
            </div>

            <!-- connectContainer End -->

        </div>
    </footer>

    <script src="js/loading.js"></script>


</body>

</html>