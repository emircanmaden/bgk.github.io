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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&amp;display=swap'>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/donateStil.css">
</head>

<body>

<div id="loading">
  <img src="images/loading.gif" alt="Yükleniyor..." />
</div> 

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
                    </li>
                        <li class="kurumsal-icon">
                        <a href="kurumsal.php"><img src="images/kurumsal.png" class="icon-white"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>







    <!--Programlar Bölümü Başlangıç-->
    <section class="programs" id="programsSection">
        <div class="container">
            <h2 class="sectionTitle">Programlar</h2>
            <div class="boxContainer">
                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Deprem Kurtarma</div>
                    <div class="programDescription">
                        Afet bölgelerinde arama ve kurtarma çalışmalarına katılın.
                    </div>
                    <button class="btngonullu">Gönüllü Ol</button>
                </div>
                <!-- Box Bitiş -->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Yaşlı Bakım Hizmeti</div>
                    <div class="programDescription">
                        Huzurevinde yaşlı bakımı ve destek hizmetlerine katılın.
                    </div>
                    <button class="btngonullu">Gönüllü Ol</button>
                </div>
                <!-- Box Bitiş -->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Gıda Dağıtım Hizmetleri</div>
                    <div class="programDescription">
                        İhtiyaç sahiplerine yemek dağıtımında gönüllü olun.
                    </div>
                    <button class="btngonullu">Gönüllü Ol</button>
                </div>
                <!-- Box Bitiş -->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Ekibimize Katılın</div>
                    <div class="programDescription">
                        Çalışmalarımıza öncelikli olarak katılma fırsatını yakalayın.
                    </div>
                    <button class="btngonullu">Gönüllü Ol</button>
                </div>
                <!-- Box Bitiş -->





                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Hayatları Kolaylaştırın</div>
                    <div class="donationCount">
                        Bağış Hedefi: <span>₺150,000</span>
                    </div>
                    <div class="programDescription">
                        İhtiyaç sahiplerine yardım ederek yaşamlarını iyileştirin.
                    </div>
                      <!-- DONATE KISMINI AYARLA BAŞLAGIC-->
                      <div class="donate">
                        <div class="thanks">Teşekkürler</div>
                        <button>
                            <div class="top"></div>
                            <div class="inside">
                                <form>
                                    <input type="text" value="₺0,00">
                                </form>
                            </div>
                            <span>
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                Bağış Yap
                            </span>
                        </button>
                    </div>
                    <!-- DONATE KISMI BİTİŞ -->
                </div>
                <!-- Box Bitiş -->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Çocuklara Yardım Et</div>
                    <div class="donationCount">
                        Bağış Hedefi: <span>₺200,000</span>
                    </div>
                    <div class="programDescription">
                        Çocukların eğitim ve sağlık hizmetlerine katkı sağlayın.
                    </div>
                    <!-- DONATE KISMINI AYARLA BAŞLAGIC-->
                    <div class="donate">
                        <div class="thanks">Teşekkürler</div>
                        <button>
                            <div class="top"></div>
                            <div class="inside">
                                <form>
                                    <input type="text" value="₺0,00">
                                </form>
                            </div>
                            <span>
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                Bağış Yap
                            </span>
                        </button>
                    </div>
                    <!-- DONATE KISMI BİTİŞ -->
                </div>
                <!-- Box Bitiş -->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Herkes İçin Yemek</div>
                    <div class="donationCount">
                        Bağış Hedefi: <span>₺100,000</span>
                    </div>
                    <div class="programDescription">
                        Yetersiz beslenmeyle mücadele için yemek dağıtımına destek olun.
                    </div>
                    <!-- DONATE KISMINI AYARLA BAŞLAGIC-->
                    <div class="donate">
                        <div class="thanks">Teşekkürler</div>
                        <button>
                            <div class="top"></div>
                            <div class="inside">
                                <form>
                                    <input type="text" value="₺0,00">
                                </form>
                            </div>
                            <span>
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                Bağış Yap
                            </span>
                        </button>
                    </div>
                    <!-- DONATE KISMI BİTİŞ -->
                </div>
                <!-- Box Bitiş -->

                <div class="box">
                    <div class="cardImage"></div>
                    <div class="programTitle">Herkes İçin Temiz Su</div>
                    <div class="donationCount">
                        Bağış Hedefi: <span>₺100,000</span>
                    </div>
                    <div class="programDescription">
                        Temiz suya erişimi olmayan bölgelere su sağlamak için bağış yapın.
                    </div>
                    <!-- DONATE KISMINI AYARLA BAŞLAGIC-->
                    <div class="donate">
                        <div class="thanks">Teşekkürler</div>
                        <button>
                            <div class="top"></div>
                            <div class="inside">
                                <form>
                                    <input type="text" value="₺0,00">
                                </form>
                            </div>
                            <span>
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                Bağış Yap
                            </span>
                        </button>
                    </div>
                    <!-- DONATE KISMI BİTİŞ -->
                </div>
                <!-- Box Bitiş -->
            </div>
            <!-- boxContainer Bitiş -->
        </div>
    </section>
    <!--Programlar Bölümü Bitiş-->

    <footer class="main-footer">
        <p class="cptext">&copy; 2024 Company BGK. All rights reserved.</p>

        <ul class="fa-brands">
            <li class="instagram"><a href=""><img src="images/instagram.png" alt="Instagram"></a></li>
            <li class="twitter"><a href=""><img src="images/x.png" alt="Twitter"></a></li>
            <li class="wp"><a href=""><img src="images/wp.png" alt="WhatsApp"></a></li>
        </ul>
    </footer>

    <script src='js/simple-mask-money.js'></script>
    <script src="js/donateScript.js"></script>
    <script src="js/loading.js"></script>

</body>

</html>