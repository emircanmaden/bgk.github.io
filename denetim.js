document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("loginForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Sayfanın yenilenmesini engelle

        // Kullanıcı adı ve şifreyi al
        var kullaniciAdi = document.getElementById("username").value;
        var sifre = document.getElementById("password").value;

        // Doğru kullanıcı adı ve şifre bilgileri
        var dogruKullaniciAdi = "emircan";
        var dogruSifre = "123";

        // Doğrulama işlemi
        if (kullaniciAdi === dogruKullaniciAdi && sifre === dogruSifre) {
            // Başarılı giriş: sessionStorage'a oturum bilgisi ekle
            sessionStorage.setItem("giris_yapildi", "true");

            // Giriş sonrası index.html sayfasına yönlendir
            window.location.href = "index.html";
        } else {
            // Hatalı giriş: hata mesajı göster
            alert("Kullanıcı adı veya şifre yanlış.");
            window.location.href = "giris.html";
        }
    });
});
