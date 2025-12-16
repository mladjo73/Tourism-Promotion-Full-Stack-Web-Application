document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".galerija img");
    const lightbox = document.createElement("div");
    lightbox.id = "lightbox";
    lightbox.innerHTML = '<span id="close">&times;</span><img>';
    document.body.appendChild(lightbox);

    const lightboxImg = lightbox.querySelector("img");
    const closeBtn = lightbox.querySelector("#close");

    images.forEach(img => {
        img.addEventListener("click", () => {
            lightbox.style.display = "flex";
            lightboxImg.src = img.src;
        });
    });

    closeBtn.addEventListener("click", () => {
        lightbox.style.display = "none";
    });

    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = "none";
        }
    });
});