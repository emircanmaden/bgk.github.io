<?php
session_start();

// Formdan gelen kullanıcı adı ve şifre bilgilerini alıyoruz
$kullanici_adi = isset($_POST['username']) ? $_POST['username'] : '';
$sifre = isset($_POST['password']) ? $_POST['password'] : '';

// Kullanıcı adı ve şifre doğrulama (örnek)
$dogru_kullanici_adi = "emircan";
$dogru_sifre = "123";

// Giriş bilgilerini kontrol et
if ($kullanici_adi === $dogru_kullanici_adi && $sifre === $dogru_sifre) {
    // Giriş başarılıysa oturum bilgilerini ayarla
    $_SESSION['giris_yapildi'] = true;
    header("Location: index.php");
    exit();
} else {
    // Giriş başarısızsa hata mesajı göster
    header("Location: giris.php");
    exit();
}
?>
