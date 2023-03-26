document.getElementById("close-filters-button").addEventListener("click", ()=>{
    document.getElementById("filters_column").style.display = "none";
    document.getElementById("show_filters_button").style.display = "block";
    document.getElementById("first_row").style.justifyContent = "space-around";
});

document.getElementById("show_filters_button").addEventListener("click", ()=>{
    document.getElementById("show_filters_button").style.display = "none";
    document.getElementById("filters_column").style.display = "flex";
    document.getElementById("first_row").style.justifyContent = "space-between";
});

const elements = document.querySelectorAll(".wrapper");
    elements.forEach(elements => {
        elements.addEventListener("click", (event)=>{
            document.getElementById("card_info_showing").style.display = "flex";
    });
})