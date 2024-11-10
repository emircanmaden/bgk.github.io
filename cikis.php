<?php
session_start();

// Tüm oturum verilerini sil
session_destroy();

// Kullanıcıyı giriş sayfasına yönlendir
header("Location: giris.php");
exit();
?>
