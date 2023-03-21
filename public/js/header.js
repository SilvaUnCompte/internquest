const second_header = document.querySelector("#second_header");
const second_header_fake = document.querySelector("#second_header_fake");

// nav-click


window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    if (window.innerWidth > 768) {
        if (scroll > 1) {
            second_header.style.opacity = 1 - scroll / 100;
        }
        else {
            second_header.style.opacity = 1;
        }
    }
    // second_header.style.display = "none";

});