document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".rezervacija-forma");

    form.addEventListener("submit", async e => {
        e.preventDefault();
        const data = new FormData(form);
        data.append("ajax", "1");

        try {
            const res = await fetch("rezervacija.php", { method: "POST", body: data });
            const json = await res.json();

            const overlay = document.createElement("div");
            overlay.className = "overlay-poruka";
            overlay.innerHTML = `<div class="poruka-box ${json.status}">${json.message}</div>`;
            document.body.appendChild(overlay);

            overlay.addEventListener("click", () => overlay.remove());
            if (json.status === "success") form.reset();
        } catch (err) {
            console.error(err);
        }
    });
});