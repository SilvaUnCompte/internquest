const input_street = document.getElementById("input_street");
const input_city = document.getElementById("input_city");
const input_postal = document.getElementById("input_postal");


function add_location() {
    if(input_street.value == "" || input_city.value == "" || input_postal.value == "") {
        alert("Veuillez remplir tous les champs");
        return;
    }
    html = "<div class='entry-element'>";
    html += "<p>" + input_street.value + " " + input_city.value + " " + input_postal.value + "</p>";
    // html += "<button type=\"button\" id=\"add_sector\">-</button>"
    html += "</div>";

    document.getElementById("entry-address").innerHTML += html;
};
