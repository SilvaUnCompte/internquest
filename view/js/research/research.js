document.getElementById("filter_closing_link").addEventListener("click", ()=>{
    document.getElementById("filters_column").style.display = "none";
    document.getElementById("show_filters_button").style.display = "block";
    document.getElementById("search_and_results_column").style.paddingLeft = "0px";
});

document.getElementById("show_filters_button").addEventListener("click", ()=>{
    document.getElementById("show_filters_button").style.display = "none";
    document.getElementById("filters_column").style.display = "flex";
    document.getElementById("search_and_results_column").style.paddingLeft = "20px";
});