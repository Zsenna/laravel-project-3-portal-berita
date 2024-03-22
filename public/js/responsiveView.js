// Array untuk menyimpan jumlah item yang ditampilkan dalam setiap kondisi lebar tampilan
const displaySettings = [
    { width: 1700, itemsDisplayed: 6 },
    { width: 1000, itemsDisplayed: 4 },
    { width: 700, itemsDisplayed: 2 },
    { width: 0, itemsDisplayed: 1 }, // Default for smaller screens
];

// Fungsi untuk menyesuaikan jumlah item yang ditampilkan berdasarkan lebar tampilan
function adjustDisplay() {
    const viewportWidth = window.innerWidth;
    const container = document.getElementById("col");
    const contentItems = container.querySelectorAll(".card");

    // Menemukan pengaturan yang sesuai dengan lebar tampilan saat ini
    const settings = displaySettings.find(
        (setting) => viewportWidth >= setting.width
    );
    const itemsToDisplay = settings ? settings.itemsDisplayed : 1;

    // Menyesuaikan tampilan item sesuai dengan jumlah yang ditampilkan
    for (let i = 0; i < contentItems.length; i++) {
        if (i < itemsToDisplay) {
            contentItems[i].style.display = "flex";
        } else {
            contentItems[i].style.display = "none";
        }
    }
}

// Penyesuaian awal saat halaman dimuat
adjustDisplay();

// Penyesuaian tampilan saat ukuran viewport berubah
window.addEventListener("resize", adjustDisplay);
