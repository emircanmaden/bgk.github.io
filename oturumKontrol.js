document.addEventListener("DOMContentLoaded", function () {
    // Oturum kontrolü
    if (sessionStorage.getItem("giris_yapildi") !== "true") {
        // Giriş yapılmamışsa, giris.html'ye yönlendir
        window.location.href = "giris.html";
    }
});
