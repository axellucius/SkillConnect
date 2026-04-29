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

// SLIDESHOW
