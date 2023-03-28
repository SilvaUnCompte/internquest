
function showCompanyData(identifiant) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/company-research.php?id="+identifiant, true);
    xhr.onload = () => {
        let response = JSON.parse(xhr.responseText);
        let html = "";
        let averageGrade = 0;
        let grades = JSON.parse(response.grades);
        for(let i = 0; i < grades.length; i++) {
            averageGrade += grades[i];
        }
        html += "<p id=\"identifiant\">"+identifiant+"</p>";
        html += "<h2>"+response.name+"</h2>";
        html += "<h3>Confiance du pilote : "+response.pilot_trust+"</h3>";
        html += "<h3>Note moyenne : "+(response.grades.length != 0 ? averageGrade/response.grades.length : averageGrade)+"</h3>";
        html += "<h3>Notez cette entreprise : <input id=\"grade-entry\" name=\"grade\" type=\"number\" min=\"0\" min=\"5\"><button id=\"grade-button\" onclick=\"addGrade()\">Noter</button></h3>"
        html += "<h3>Description : </h3>";
        html += "<p>"+response.desc+"</p>"; 

        document.getElementById("card_infos").innerHTML = html;
    };
    xhr.send();
}

function deleteCompany(identifiant, researchType){
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/company-deleting.php?id="+identifiant+"&typeRecherche="+researchType, true);
    xhr.send();
}