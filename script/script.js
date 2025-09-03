document.addEventListener('DOMContentLoaded', () => {
    // --- Toggle Plans / Réalisation ---
    /*document.querySelectorAll('.creation').forEach(creation => {
        const realImg = creation.querySelector('.creation-img.real');
        const planImg = creation.querySelector('.creation-img.plan');
        const toggleBtn = creation.querySelector('.toggle-btn');
        if (realImg && planImg && toggleBtn) {
            let showingPlan = false;
            toggleBtn.addEventListener('click', () => {
                showingPlan = !showingPlan;
                realImg.classList.toggle('hidden', showingPlan);
                planImg.classList.toggle('hidden', !showingPlan);
                toggleBtn.textContent = showingPlan ? 'Voir Réalisation' : 'Voir Plans';
            });
        }
    });*/

    // --- Lire plus / Lire moins ---
    document.querySelectorAll('.creation').forEach(creation => {
        const hiddenText = creation.querySelector('.hidden-text');
        const readMoreBtn = creation.querySelector('.read-more');
        if (!hiddenText || !readMoreBtn) return;

        readMoreBtn.addEventListener('click', () => {
            const open = hiddenText.classList.toggle('is-open');
            readMoreBtn.textContent = open ? 'Lire moins' : 'Lire plus';
        });
    });
});
