function cikisYap() {
    // Çıkış yapıldığında sessionStorage'dan oturum bilgisini sil
    sessionStorage.removeItem("giris_yapildi");

    // Çıkış sonrası giris.html sayfasına yönlendir
    window.location.href = "giris.html";
}
