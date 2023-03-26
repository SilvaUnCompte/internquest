var wp = 1;
var wp_total = 1;

function showOfferData() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/internshipResearch.php", true);
    xhr.send();
    console.log(xhr.responseText);
}