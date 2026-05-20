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
document.addEventListener("DOMContentLoaded", function() {
    const iconInput = document.getElementById('project-icon-input');
    const iconPreview = document.getElementById('project-icon-preview');
    const deleteImageBtn = document.getElementById('delete-image-btn');

    // Alamat gambar default bawaan project
    const defaultImagePath = '/assets/images/default-project.jpg';

    // 1. Ketika user memilih gambar, render preview instan
    if (iconInput && iconPreview) {
        iconInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    iconPreview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // 2. Ketika tombol 'Delete Image' diklik, kosongkan input file dan balikkan ke default
    if (deleteImageBtn && iconInput && iconPreview) {
        deleteImageBtn.addEventListener('click', function() {
            iconInput.value = ''; // Mengosongkan data file di HTML form
            iconPreview.src = defaultImagePath; // Mengembalikan visual ke default
        });
    }
});

