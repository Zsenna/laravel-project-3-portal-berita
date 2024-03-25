// Array untuk menyimpan jumlah item yang ditampilkan dalam setiap kondisi lebar tampilan
const displaySettings = [
    { width: 1700, itemsDisplayed: 5 },
    { width: 1699, itemsDisplayed: 3 },
    { width: 1000, itemsDisplayed: 2 },
    { width: 700, itemsDisplayed: 1 }, // Default for smaller screens
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

const displaySettings1 = [
    { width: 1700, itemsDisplayed: 6 },
    { width: 1699, itemsDisplayed: 4 },
    { width: 1100, itemsDisplayed: 2 },
    { width: 1000, itemsDisplayed: 1 }, // Default for smaller screens
];

// Fungsi untuk menyesuaikan jumlah item yang ditampilkan berdasarkan lebar tampilan
function adjustDisplay1() {
    const viewportWidth = window.innerWidth;
    const container = document.getElementById("container-left");
    const contentItems = container.querySelectorAll(".card");

    // Menemukan pengaturan yang sesuai dengan lebar tampilan saat ini
    const settings = displaySettings1.find(
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
adjustDisplay1();

// Penyesuaian tampilan saat ukuran viewport berubah
window.addEventListener("resize", adjustDisplay1);

const displaySettings2 = [
    { width: 1100, itemsDisplayed: 2 },
    { width: 1000, itemsDisplayed: 1 }, // Default for smaller screens
];

// Fungsi untuk menyesuaikan jumlah item yang ditampilkan berdasarkan lebar tampilan
function adjustDisplay2() {
    const viewportWidth = window.innerWidth;
    const container = document.getElementById("container-right");
    const contentItems = container.querySelectorAll(".card");

    // Menemukan pengaturan yang sesuai dengan lebar tampilan saat ini
    const settings = displaySettings2.find(
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
adjustDisplay2();

// Penyesuaian tampilan saat ukuran viewport berubah
window.addEventListener("resize", adjustDisplay2);
