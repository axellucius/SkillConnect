// SUPPORT FAQ TOGGLE
function toggleFAQ(id) {
    const answer = document.getElementById(`ans-${id}`);
    const icon = document.getElementById(`icon-${id}`);

    const isOpen = answer.style.maxHeight && answer.style.maxHeight !== "0px";

    document.querySelectorAll('[id^="ans-"]').forEach(el => {
        el.style.maxHeight = "0px";
    });

    document.querySelectorAll('[id^="icon-"]').forEach(ic => {
        ic.classList.remove('rotate-180');
    });

    if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.classList.add('rotate-180');
    }
}

// PREVIEW IMAGE ICON
document.addEventListener("DOMContentLoaded", function () {
    // 1. LOGIKA UTK PREVIEW & HAPUS GAMBAR ICON (Create/Edit Page)
    const iconInput = document.getElementById('project-icon-input');
    const iconPreview = document.getElementById('project-icon-preview');
    const deleteImageBtn = document.getElementById('delete-image-btn');
    const defaultImagePath = '/assets/images/default-project.jpg';

    if (iconInput && iconPreview) {
        iconInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    iconPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    if (deleteImageBtn && iconInput && iconPreview) {
        deleteImageBtn.addEventListener('click', function () {
            iconInput.value = '';
            iconPreview.src = defaultImagePath;
        });
    }

    // 2. LOGIKA SELEKSI KARTU & POP-UP HAPUS (List Page)
    const checkboxes = document.querySelectorAll('.project-checkbox');
    const btnBulkDelete = document.getElementById('btn-bulk-delete');
    const formBulkDelete = document.getElementById('form-bulk-delete');
    const deleteModal = document.getElementById('delete-modal');
    const modalBox = document.getElementById('modal-box');
    const btnCancelDelete = document.getElementById('btn-cancel-delete');
    const checkedCountText = document.getElementById('checked-count');
    const projectCards = document.querySelectorAll('.project-card');

    // Cek apakah elemen list project ada di halaman saat ini
    if (projectCards.length > 0) {

        // Fungsi memantau jumlah checkbox yang aktif
        function updateDeleteButtonStatus() {
            const checkedCount = document.querySelectorAll('.project-checkbox:checked').length;
            if (checkedCountText) checkedCountText.textContent = checkedCount;

            if (btnBulkDelete) {
                if (checkedCount > 0) {
                    btnBulkDelete.disabled = false;
                    btnBulkDelete.classList.remove('bg-gray-300', 'cursor-not-allowed');
                    btnBulkDelete.classList.add('bg-[#E01014]', 'hover:bg-[#ff2e31]', 'cursor-pointer');
                } else {
                    btnBulkDelete.disabled = true;
                    btnBulkDelete.classList.remove('bg-[#E01014]', 'hover:bg-[#ff2e31]', 'cursor-pointer');
                    btnBulkDelete.classList.add('bg-gray-300', 'cursor-not-allowed');
                }
            }
        }

        // Handle klik langsung pada area kartu proyek
        projectCards.forEach(card => {
            card.addEventListener('click', function (e) {
                // Ambil target elemen yang diklik oleh user
                const target = e.target;

                // JIKA USER MENGKLIK CHECKBOX: Biarkan event bawaan checkbox bekerja murni
                if (target.classList.contains('project-checkbox')) {
                    if (target.checked) {
                        card.classList.add('border-red-400', 'bg-red-50/10');
                    } else {
                        card.classList.remove('border-red-400', 'bg-red-50/10');
                    }
                    updateDeleteButtonStatus();
                    return;
                }

                // JIKA LAGI ADA ITEM YANG DICENTANG (Mode Hapus Aktif):
                // Mengklik area kosong kartu akan ikut mencentang/membatalkan centang (bukan pindah halaman)
                const anyChecked = document.querySelectorAll('.project-checkbox:checked').length > 0;
                if (anyChecked) {
                    const cb = card.querySelector('.project-checkbox');
                    if (cb) {
                        cb.checked = !cb.checked;
                        if (cb.checked) {
                            card.classList.add('border-red-400', 'bg-red-50/10');
                        } else {
                            card.classList.remove('border-red-400', 'bg-red-50/10');
                        }
                        updateDeleteButtonStatus();
                    }
                    return;
                }

                // JIKA NORMAL (Tidak ada centangan sama sekali):
                // Klik area kartu akan mengarahkan user masuk ke halaman detail proyek
                const projectId = card.getAttribute('data-id');
                if (projectId && !target.closest('.project-checkbox')) {
                    window.location.href = `/projects/detail/${projectId}`;
                }
            });
        });

        // Kontrol Animasi Modal Pop-up Konfirmasi
        function openModal() {
            if (deleteModal && modalBox) {
                // Saat dibuka, hilangkan 'hidden' dan tambahkan 'flex' agar modal ke tengah screen
                deleteModal.classList.remove('hidden');
                deleteModal.classList.add('flex');
                setTimeout(() => {
                    modalBox.classList.remove('scale-95', 'opacity-0');
                    modalBox.classList.add('scale-100', 'opacity-100');
                }, 10);
            }
        }

        function closeModal() {
            if (deleteModal && modalBox) {
                modalBox.classList.remove('scale-100', 'opacity-100');
                modalBox.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    // Saat ditutup, kembalikan 'hidden' dan lepas kelas 'flex'
                    deleteModal.classList.add('hidden');
                    deleteModal.classList.remove('flex');
                }, 200);
            }
        }

        if (btnBulkDelete) {
            btnBulkDelete.addEventListener('click', function (e) {
                e.preventDefault();
                openModal();
            });
        }

        // TAMBAHKAN LOGIKA UNTUK MEMAKSA SUBMIT FORM LEWAT JS
        if (deleteModal && formBulkDelete) {
            // Cari tombol "Yes, Delete" yang bertipe submit di dalam modal
            const btnConfirmSubmit = deleteModal.querySelector('button[type="submit"]');

            if (btnConfirmSubmit) {
                btnConfirmSubmit.addEventListener('click', function (e) {
                    e.preventDefault(); // Hentikan kebingungan bubble event di browser

                    // Ambil jumlah data yang tercentang untuk memastikan aman
                    const checkedCount = document.querySelectorAll('.project-checkbox:checked').length;

                    if (checkedCount > 0) {
                        // Paksa form untuk menembak data POST secara langsung ke /projects/delete
                        formBulkDelete.submit();
                    }
                });
            }
        }

        if (btnCancelDelete) btnCancelDelete.addEventListener('click', closeModal);
    }
});

