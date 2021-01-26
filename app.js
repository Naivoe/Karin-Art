const modal = document.querySelector(".modal");
const previews = document.querySelectorAll(".grid-wrapper img");
const original = document.querySelector(".full-img");
const caption = document.querySelector(".caption");

previews.forEach((preview) => {
    preview.addEventListener("click", () => {
        modal.classList.add("open");
        original.classList.add("open");
        //Dynamic change text and image
        const originalSrc = preview.getAttribute("data-original");
        original.src = `./img/${originalSrc}`;
        const altText = preview.alt;
        caption.textContent = altText;
    });
});

modal.addEventListener("click", (e) =>{
    if(e.target.classList.contains("modal")){
        modal.classList.remove("open");
        original.classList.remove("open");

    }
});

const tl = gsap.timeline({defaults: {ease: "power1.out"}});

tl.to(".hide-text", {y:"0%", duration: 1, stagger: 0.25 });
tl.to(".slider", {y:"-100%", duration: 1, delay: 0.5 });
tl.to(".intro", {y:"-100%", duration: 1}, "-=1");
tl.fromTo("nav", {opacity: 0, zIndex:0}, {opacity: 1, zIndex:1, duration:0.5});
tl.fromTo(".container", {opacity: 0}, {opacity: 1, duration:0.5}, "-=0.5");
tl.fromTo(".intro-text",{opacity:1},{opacity:0},"-=1");
