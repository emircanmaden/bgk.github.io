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



        
    <!--başlangıç sayfası-->

    <!--Hakkında başlangıç yeri-->

    <section class="fullContainer" id="aboutSection">
        <div class="container">
            <h2 class="sectionTitle">Hakkımızda</h2>
            <div class="aciklama">
            <p>
                Bağışla Geleceği Kur Derneği olarak, toplumumuzun ihtiyaçlarını karşılamak ve geleceği birlikte inşa
                etmek için gönüllülerimizin ve bağışçılarımızın desteğine her zaman güveniyoruz. Bizimle birlikte siz de
                topluma katkıda bulunabilirsiniz.
            </p>
        </div>

         
        <!-- Vizyonumuz Bölümü -->
        <div class="vision">
            <h3>Vizyonumuz</h3>
            <p>
                Ülkemizde ve dünyada sürdürülebilir bir gelecek için ihtiyaç sahibi herkese ulaşmayı ve onların hayatlarını iyileştirmeyi hedefliyoruz. Toplumsal dayanışma, eğitim ve sağlık alanlarında öncü bir kurum olmayı amaçlıyoruz.
            </p>
        </div>
        
        <!-- Misyonumuz Bölümü -->
        <div class="mission">
            <h3>Misyonumuz</h3>
            <p>
                Misyonumuz, ihtiyaç sahiplerine yardım eli uzatarak onların hayatlarında anlamlı bir fark yaratmaktır. Gönüllü ve bağışçılarımızla birlikte toplumda daha fazla insana umut, eğitim ve sağlık hizmetleri sunmayı amaçlıyoruz.
            </p>
        </div>

            <div class="cards">
                <div class="donationBox">
                    <div class="title">Bağış Yapabilirsin</div>
                    <p>
                        Bizimle bağış yaparak, daha fazla insana umut ve fırsat sağlayabilirsiniz. Yapacağınız her
                        bağış, eğitim, sağlık ve sosyal hizmetler gibi temel ihtiyaçların karşılanmasına katkıda
                        bulunacaktır. Siz de geleceğe bir iyilik bırakın.

                    </p>
                    <button onclick="window.location.href='programs.php';">
                Bağış Yap
            </button>
                </div>
                <!--DonationBox Bitiş-->

                <div class="volunteerBox">
                    <div class="title">Gönüllü Olabilirsin</div>
                    <p>
                        Gönüllü olarak toplumsal projelerimize katılabilir, birçok insanın hayatında fark
                        yaratabilirsiniz. Eğitim, sağlık, çevre ve daha birçok alanda, yeteneklerinizi ve zamanınızı
                        paylaşarak bize katılın. Birlikte daha güçlü bir toplum inşa edelim.


                    </p>
                    <button onclick="window.location.href='gonullulukForm.php';" id="bagis">
                Gönüllü Ol
            </button>
                </div>
                <!--DonationBox Bitiş-->


            </div>
        </div>
    </section>
    <!--Hakkında bitiş yeri-->
    
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