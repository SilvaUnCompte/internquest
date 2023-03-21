const second_header = document.querySelector("#second_header");
const nav_click = document.getElementsByClassName("nav-link");


window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    if (window.innerWidth > 768) {
        if (scroll > 1) {
            second_header.style.opacity = 1 - scroll / 100;

            for(let i = 0; i < nav_click.length; i++) {
                nav_click[i].href="#";
                console.log(nav_click[i]);
            }
        }
        else {
            second_header.style.opacity = 1;
            nav_click[1].href="#";
            nav_click[2].href="#";
            nav_click[3].href="#";
        }
    }
});