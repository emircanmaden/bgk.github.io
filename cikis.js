document.addEventListener("DOMContentLoaded", function () {
    // Çıkış yapıldığında
    sessionStorage.removeItem("giris_yapildi");

    // Çıkış sonrası giris.html sayfasına yönlendir
    window.location.href = "giris.html";
});
