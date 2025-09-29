import "./bootstrap";

document.addEventListener("livewire:navigated", () => {
    document.getElementById("currentYear").textContent =
        new Date().getFullYear();

    AOS.init({
        once: true, // animation happens only once
        offset: 100, // trigger point
        easing: "ease-in-out", // smoothness
        duration: 1200, // default duration
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                }
            });
        },
        {
            threshold: 0.3,
        }
    );

    document.querySelectorAll(".animate-glow-on-scroll").forEach((el) => {
        observer.observe(el);
    });

    

});
