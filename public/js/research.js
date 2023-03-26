import ('/public/js/add_field/show_offer_data.js');

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
            const urlParams = new URLSearchParams();
            urlParams.append('offerID', elements.getAttribute('value'));
            document.getElementById("card_info_showing").style.display = "flex";
            showOfferData();
    });
})

document.getElementById("search_bar").addEventListener('load', ()=>{
    const urlParams = new URLSearchParams();
    const researchType = urlParams.get('typeRecherche');
    document.getElementById("search_bar").action = `?typeRecherche=${researchType}`;

})