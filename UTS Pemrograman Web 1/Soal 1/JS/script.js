const welcomeTexts = ['Selamat Datang di Website Pendidikan di Kota Tegal, Jawa Tengah, Indonesia'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik() {
    if (count == welcomeTexts.length) {
        return; // Hentikan pemanggilan rekursif jika semua teks sudah ditampilkan
    }

    currentTxt = welcomeTexts[count];

    words = currentTxt.slice(0, ++txtIndex);
    document.querySelector('header h1').textContent = words;

    if (words.length == currentTxt.length) {
        count++;
        txtIndex = 0;

        // Jeda sebelum melanjutkan atau menghentikan (misalnya, setelah 2000 milidetik)
        setTimeout(() => {
            ngetik(); // Pemanggilan rekursif untuk teks berikutnya
        }, 2000);
    } else {
        // Pemanggilan rekursif untuk melanjutkan pengetikan
        setTimeout(ngetik, 65);
    }
})();
