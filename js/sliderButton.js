const banners = [
    {
        image: 'images/banner.jpg',
        title: 'Birlikte <span>Hayat Kurtarabiliriz</span>',
        description: 'Geniş kitlelere ulaşırız. Şubelerimiz, BGK Danışmanlık Merkezlerimiz, gönüllülerimiz ve Ülke BGK topluluğumuz ile toplumun her kesiminde ve tüm yaşam alanlarında varız.'
    },
    {
        image: 'images/banner2.png',
        title: 'Umut <span>Yaratalım</span>',
        description: 'Desteklerinizle daha fazla insana ulaşabiliriz. Her bağış yeni bir umudu yeşertir.'
    },
    {
        image: 'images/bannergiris.jpg',
        title: 'Değişime <span>Katılın</span>',
        description: 'Geleceği kurmak için birlikte hareket ediyoruz. Siz de gönüllü olun, değişime katılın.'
    },
    {
        image: 'images/banner4.jpg',
        title: 'Bir <span>Gelecek</span> Kurun',
        description: 'Her katkınız, bir çocuğun daha sağlıklı bir geleceğe adım atmasını sağlar.'
    },
];
let currentIndex = 0;

const banner = document.querySelector('.banner');
const bannerTitle = document.querySelector('.banner h1');
const bannerDescription = document.querySelector('.banner p');

function updateBanner() {
    banner.style.backgroundImage = `url(${banners[currentIndex].image})`;
    bannerTitle.innerHTML = banners[currentIndex].title;
    bannerDescription.textContent = banners[currentIndex].description;
}

document.getElementById('prevBtn').addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : banners.length - 1;
    updateBanner();
});

document.getElementById('nextBtn').addEventListener('click', () => {
    currentIndex = (currentIndex < banners.length - 1) ? currentIndex + 1 : 0;
    updateBanner();
});

// Sayfa yüklendiğinde ilk banneri göster
updateBanner();
