// SUPPORT FAQ TOGGLE
function toggleFAQ(id) {
    const answer = document.getElementById(`ans-${id}`);
    const icon = document.getElementById(`icon-${id}`);

    // 1. Cek apakah card yang diklik saat ini sudah terbuka
    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== "0px";

    // 2. TUTUP SEMUA card lain terlebih dahulu
    // Cari semua elemen yang ID-nya dimulai dengan 'ans-'
    document.querySelectorAll('[id^="ans-"]').forEach(el => {
        el.style.maxHeight = "0px";
    });
    
    // Cari semua elemen yang ID-nya dimulai dengan 'icon-' dan reset rotasinya
    document.querySelectorAll('[id^="icon-"]').forEach(ic => {
        ic.classList.remove('rotate-180');
    });

    // 3. Jika card yang diklik tadinya tertutup, sekarang kita buka
    if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.classList.add('rotate-180');
    }
    // Jika tadinya terbuka, maka akan tetap tertutup karena proses reset di atas
}
