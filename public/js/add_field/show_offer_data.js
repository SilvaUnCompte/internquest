
function showOfferData(identifiant) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/internship-research.php?id="+identifiant, true);
    xhr.onload = () => {
        let response = JSON.parse(xhr.responseText);
        let html = "";
        html += "<p id=\"identifiant\">"+identifiant+"</p>";
        html += "<h2>"+response.title+"</h2>";
        html += "<h3>Entreprise : "+response.company_name+"</h3>"
        html += "<h3> Adresse du lieu du stage : \n"+response.location.street_address+", "+response.location.city+", "+response.location.postal_code+"</h3>";
        html += "<h3>Adresse courriel de contact : <a href=\"mailto:"+response.contactEmail+"\">"+response.contactEmail+"</a></h3>";
        html += "<h3> Niveau scholaire minimum : "+response.lvl+"</h3>";
        html += "<h3> Durée de stage : "+response.duration+" semaines </h3>";
        html += "<h3> Salaire : "+response.remuneration+"€/mois </h3>";
        html += "<h3>Description : </h3>";
        html += "<p>"+response.desc+"</p>"; 
        let n = 0;
        let skills = JSON.parse(response.skills);
        html += "<h3> Les compétences requises : </h3>";
        html += "<ul id=\"skills-list\">";
        while(skills[n] != undefined){
            html += "<li>"+skills[n]+"</li>";
            n++;
        }
        html += "</ul>";
        document.getElementById("card_infos").innerHTML = html;
    };
    xhr.send();
}

function deleteOffer(identifiant){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/internship-deleting.php?id="+identifiant, true);
    xhr.onload = () => {window.location.reload();};
    xhr.send();
}