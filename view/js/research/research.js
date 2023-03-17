document.getElementById("filter_closing_link").addEventListener("click", ()=>{
    document.getElementById("filters_column").style.display = "none";
    document.getElementById("show_filters_button").style.display = "block";
});

document.getElementById("show_filters_button").addEventListener("click", ()=>{
    document.getElementById("show_filters_button").style.display = "none";
    document.getElementById("filters_column").style.display = "flex";
});