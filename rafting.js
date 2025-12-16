document.addEventListener("DOMContentLoaded", () => {
    const galerija = document.getElementById("galerija");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = lightbox.querySelector("img");

    galerija.querySelectorAll("img").forEach(img => {
        img.addEventListener("click", () => {
            lightboxImg.src = img.src;
            lightbox.classList.add("show");
        });
    });

    // Zatvaranje klikom na lightbox
    lightbox.addEventListener("click", () => {
        lightbox.classList.remove("show");
    });
});