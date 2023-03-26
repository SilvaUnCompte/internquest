const search_student = document.querySelector("#search-student");
const search_pilote = document.querySelector("#search-pilote");

function remove(id){
    if(confirm("Voulez-vous vraiment supprimer ce compte ?")){
        console.log(id);
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "/database/api/delete_account.php?id=" + id, true);
        xhr.onload = () => {
            if (xhr.status == 200) {
                refreashAccountData(0);
                refreashAccountData(1);
            }
            else {
                html = "<p>Erreur " + xhr.status + " : " + xhr.statusText + "</p>";
            }
        };
        xhr.send();
    }
}



function refreashAccountData(type) {
    typeString = type?"pilote-":"student-"
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/database/api/account.php?search=" + (type?search_pilote.value:search_student.value) + "&type=" + type, true);
    xhr.onload = () => {
        if (xhr.status == 200) {
            data = JSON.parse(xhr.responseText);
            for (var i = 0; i < 5; i++) {
                if (data[i] == undefined) {
                    document.getElementById(typeString + i).style.background = "lightgrey";
                    // cacher les enfants
                    card = document.getElementById(typeString + i);
                    card.children[0].innerHTML = ".";
                    card.children[1].innerHTML = "";
                    card.children[2].children[0].innerHTML = "";
                    card.children[2].children[1].innerHTML = "";
                    card.children[2].children[1].setAttribute( "onClick", "javascript: ;" );
                }
                else {
                    document.getElementById(typeString + i).style.background = "white";
                    card = document.getElementById(typeString + i);
                    card.children[0].innerHTML = data[i].name.first;
                    card.children[1].innerHTML = data[i].name.last;
                    card.children[2].children[0].innerHTML = "Editer";
                    card.children[2].children[1].innerHTML = "Supprimer";
                    card.children[2].children[1].setAttribute( "onClick", "javascript: remove(\"" + data[0]._id + "\");" );
                }
            }
        }
        else {
            html = "<p>Erreur " + xhr.status + " : " + xhr.statusText + "</p>";
        }
    };
    xhr.send();
};

refreashAccountData(0)
search_student.addEventListener('input', () => refreashAccountData(0));
search_pilote.addEventListener('input', () => refreashAccountData(1));