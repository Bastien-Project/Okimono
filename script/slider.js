// Variables globales pour gérer plusieurs sliders
let currentSlideIndex = {};

// Initialisation des sliders au chargement de la page
document.addEventListener("DOMContentLoaded", function() {
    initializeSliders();
    initializeToggleButtons();
});

// Fonction pour initialiser tous les sliders sur la page
function initializeSliders() {
    const sliderContainers = document.querySelectorAll(".slider-container");
    
    sliderContainers.forEach((container, index) => {
        // Assigner un ID unique à chaque slider s'il n'en a pas
        if (!container.id) {
            container.id = `slider-${index}`;
        }
        
        // Initialiser l'index du slide courant pour ce slider
        currentSlideIndex[container.id] = 0;
        
        // Ajouter les événements pour les boutons
        const prevBtn = container.querySelector(".prev-btn");
        const nextBtn = container.querySelector(".next-btn");
        
        if (prevBtn) {
            prevBtn.onclick = () => changeSlide(-1, container.id);
        }
        
        if (nextBtn) {
            nextBtn.onclick = () => changeSlide(1, container.id);
        }
        
        // Ajouter les événements pour les indicateurs
        const indicators = container.querySelectorAll(".indicator");
        indicators.forEach((indicator, indicatorIndex) => {
            indicator.onclick = () => currentSlide(indicatorIndex + 1, container.id);
        });
        
        // Démarrer le défilement automatique seulement s'il y a plus d'une image
        const slides = container.querySelectorAll(".slide");
        if (slides.length > 1) {
            startAutoSlide(container.id);
        }
    });
}

// Fonction pour initialiser les boutons de basculement plans/réalisations
function initializeToggleButtons() {
    const toggleButtons = document.querySelectorAll(".toggle-btn");
    
    toggleButtons.forEach(button => {
        const creation = button.closest(".creation");
        const sliderContainers = creation.querySelectorAll(".slider-container");
        
        if (sliderContainers.length >= 2) {
            const realisationsSlider = sliderContainers[0];
            const plansSlider = sliderContainers[1];
            
            // S'assurer que par défaut les réalisations sont visibles et les plans cachés
            realisationsSlider.style.display = "block";
            plansSlider.style.display = "none";
            
            // S'assurer que le texte du bouton est correct
            if (button.textContent.trim() !== "Voir Plans" && button.textContent.trim() !== "Voir Réalisations") {
                button.textContent = "Voir Plans";
            }

            button.addEventListener("click", function() {
                if (plansSlider.style.display === "none") {
                    // Afficher les plans, masquer les réalisations
                    realisationsSlider.style.display = "none";
                    plansSlider.style.display = "block";
                    this.textContent = "Voir Réalisations";
                    
                    // Arrêter l'auto-slide des réalisations et démarrer celui des plans
                    stopAutoSlide(realisationsSlider.id);
                    const plansSlides = plansSlider.querySelectorAll(".slide");
                    if (plansSlides.length > 1) {
                        startAutoSlide(plansSlider.id);
                    }
                } else {
                    // Afficher les réalisations, masquer les plans
                    plansSlider.style.display = "none";
                    realisationsSlider.style.display = "block";
                    this.textContent = "Voir Plans";
                    
                    // Arrêter l'auto-slide des plans et démarrer celui des réalisations
                    stopAutoSlide(plansSlider.id);
                    const realisationsSlides = realisationsSlider.querySelectorAll(".slide");
                    if (realisationsSlides.length > 1) {
                        startAutoSlide(realisationsSlider.id);
                    }
                }
            });
        }
    });
}

// Fonction pour changer de slide (précédent/suivant)
function changeSlide(direction, sliderId = null) {
    // Si aucun ID de slider n'est fourni, utiliser le premier slider trouvé
    if (!sliderId) {
        const firstSlider = document.querySelector(".slider-container:not([style*='display: none'])");
        sliderId = firstSlider ? firstSlider.id : "slider-0";
    }
    
    const container = document.getElementById(sliderId);
    if (!container) return;
    
    // Ne pas changer de slide si le container est masqué
    if (container.style.display === "none") return;
    
    const slides = container.querySelectorAll(".slide");
    const indicators = container.querySelectorAll(".indicator");
    
    if (slides.length === 0) return;
    
    // Retirer la classe active du slide et indicateur actuels
    slides[currentSlideIndex[sliderId]].classList.remove("active");
    if (indicators[currentSlideIndex[sliderId]]) {
        indicators[currentSlideIndex[sliderId]].classList.remove("active");
    }
    
    // Calculer le nouvel index
    currentSlideIndex[sliderId] += direction;
    
    // Gérer le bouclage
    if (currentSlideIndex[sliderId] >= slides.length) {
        currentSlideIndex[sliderId] = 0;
    } else if (currentSlideIndex[sliderId] < 0) {
        currentSlideIndex[sliderId] = slides.length - 1;
    }
    
    // Ajouter la classe active au nouveau slide et indicateur
    slides[currentSlideIndex[sliderId]].classList.add("active");
    if (indicators[currentSlideIndex[sliderId]]) {
        indicators[currentSlideIndex[sliderId]].classList.add("active");
    }
    
    // Redémarrer le timer automatique
    restartAutoSlide(sliderId);
}

// Fonction pour aller directement à un slide spécifique
function currentSlide(slideNumber, sliderId = null) {
    if (!sliderId) {
        const firstSlider = document.querySelector(".slider-container:not([style*='display: none'])");
        sliderId = firstSlider ? firstSlider.id : "slider-0";
    }
    
    const container = document.getElementById(sliderId);
    if (!container) return;
    
    // Ne pas changer de slide si le container est masqué
    if (container.style.display === "none") return;
    
    const slides = container.querySelectorAll(".slide");
    const indicators = container.querySelectorAll(".indicator");
    
    if (slides.length === 0 || slideNumber < 1 || slideNumber > slides.length) return;
    
    // Retirer la classe active du slide et indicateur actuels
    slides[currentSlideIndex[sliderId]].classList.remove("active");
    if (indicators[currentSlideIndex[sliderId]]) {
        indicators[currentSlideIndex[sliderId]].classList.remove("active");
    }
    
    // Définir le nouvel index (slideNumber - 1 car les slides commencent à 0)
    currentSlideIndex[sliderId] = slideNumber - 1;
    
    // Ajouter la classe active au nouveau slide et indicateur
    slides[currentSlideIndex[sliderId]].classList.add("active");
    if (indicators[currentSlideIndex[sliderId]]) {
        indicators[currentSlideIndex[sliderId]].classList.add("active");
    }
    
    // Redémarrer le timer automatique
    restartAutoSlide(sliderId);
}

// Variables pour gérer les timers automatiques
let autoSlideTimers = {};

// Fonction pour démarrer le défilement automatique
function startAutoSlide(sliderId, interval = 5000) {
    const container = document.getElementById(sliderId);
    if (!container) return;
    
    // Ne pas démarrer l'auto-slide si le container est masqué
    if (container.style.display === "none") return;
    
    const slides = container.querySelectorAll(".slide");
    
    // Ne pas démarrer l'auto-slide s'il n'y a qu'une seule image
    if (slides.length <= 1) return;
    
    // Arrêter le timer existant s'il y en a un
    if (autoSlideTimers[sliderId]) {
        clearInterval(autoSlideTimers[sliderId]);
    }
    
    autoSlideTimers[sliderId] = setInterval(() => {
        // Vérifier que le container est toujours visible avant de changer de slide
        if (container.style.display !== "none") {
            changeSlide(1, sliderId);
        }
    }, interval);
}

// Fonction pour redémarrer le timer automatique
function restartAutoSlide(sliderId) {
    if (autoSlideTimers[sliderId]) {
        clearInterval(autoSlideTimers[sliderId]);
    }
    startAutoSlide(sliderId);
}

// Fonction pour arrêter le défilement automatique (utile au survol)
function stopAutoSlide(sliderId) {
    if (autoSlideTimers[sliderId]) {
        clearInterval(autoSlideTimers[sliderId]);
        delete autoSlideTimers[sliderId];
    }
}

// Ajouter les événements de survol pour arrêter/reprendre l'auto-slide
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => {
        const sliderContainers = document.querySelectorAll(".slider-container");
        
        sliderContainers.forEach(container => {
            container.addEventListener("mouseenter", () => {
                stopAutoSlide(container.id);
            });
            
            container.addEventListener("mouseleave", () => {
                // Ne redémarrer l'auto-slide que si le container est visible
                if (container.style.display !== "none") {
                    startAutoSlide(container.id);
                }
            });
        });
    }, 100);
});

// Gestion du clavier (flèches gauche/droite)
document.addEventListener("keydown", function(event) {
    const activeSlider = document.querySelector(".slider-container:hover:not([style*='display: none'])");
    if (!activeSlider) return;
    
    if (event.key === "ArrowLeft") {
        event.preventDefault();
        changeSlide(-1, activeSlider.id);
    } else if (event.key === "ArrowRight") {
        event.preventDefault();
        changeSlide(1, activeSlider.id);
    }
});

// Support du swipe sur mobile
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener("touchstart", function(event) {
    const slider = event.target.closest(".slider-container");
    if (slider && slider.style.display !== "none") {
        touchStartX = event.changedTouches[0].screenX;
    }
});

document.addEventListener("touchend", function(event) {
    const slider = event.target.closest(".slider-container");
    if (slider && slider.style.display !== "none") {
        touchEndX = event.changedTouches[0].screenX;
        handleSwipe(slider.id);
    }
});

function handleSwipe(sliderId) {
    const swipeThreshold = 50; // Distance minimale pour déclencher un swipe
    const swipeDistance = touchEndX - touchStartX;
    
    if (Math.abs(swipeDistance) > swipeThreshold) {
        if (swipeDistance > 0) {
            // Swipe vers la droite - slide précédent
            changeSlide(-1, sliderId);
        } else {
            // Swipe vers la gauche - slide suivant
            changeSlide(1, sliderId);
        }
    }
}