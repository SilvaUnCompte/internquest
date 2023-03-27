import ('/public/js/add_field/show_offer_data.js');
import ('/public/js/add_field/show_company_data.js');

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
    const urlParams = new URLSearchParams(window.location.search);
    const researchType = urlParams.get('typeRecherche');
    elements.forEach(elements => {
        elements.addEventListener("click", (event)=>{
            document.getElementById("card_info_showing").style.display = "flex";
            if(researchType == 'offer'){
                showOfferData(elements.getAttribute('value'));
            }else if(researchType == 'company'){
                showCompanyData(elements.getAttribute('value'));
            }
    });
})

document.getElementById("search_bar").addEventListener('load', ()=>{
    const urlParams = new URLSearchParams(window.location.search);
    const researchType = urlParams.get('typeRecherche');
    document.getElementById("search_bar").action = `?typeRecherche=${researchType}`;
})

document.getElementById("delete-button").addEventListener('click', ()=>{
    const urlParams = new URLSearchParams(window.location.search);
    if(urlParams.get('typeRecherche') == 'offer'){
        deleteOffer(parseInt(document.getElementById("identifiant").innerHTML), urlParams.get('typeRecherche'));
    }else if(urlParams.get('typeRecherche') == 'offer'){
        deleteCompany(parseInt(document.getElementById("identifiant").innerHTML), urlParams.get('typeRecherche'));
    }
})

document.getElementById("postuler-button").addEventListener('click', ()=>{
    if(confirm('Êtes-vous sur de vouloir postuler ?')){
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "/database/api/postulation.php?id="+document.getElementById("identifiant").innerHTML, true);
        xhr.send()
    }
})

function addGrade(){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/grading.php?id="+document.getElementById("identifiant").innerHTML+"&grade="+document.getElementById('grade-entry').value, true);
    xhr.send()
}