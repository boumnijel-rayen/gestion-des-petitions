function file_selected() {
    var upload = document.getElementById('upl');
    var file = document.getElementById('file').files;
    if(file.length == 1){
        upload.style.backgroundColor = "#2691d9";
        upload.style.borderColor = "#fff";
        upload.style.color = "#fff";
    }
}

function vider_file() {
    var upload = document.getElementById('upl');
    var file = document.getElementById('file').files;
    upload.style.backgroundColor = "transparent";
    upload.style.borderColor = "#f44336";
    upload.style.color = "#000";
}

function verif(){
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var mdp = document.getElementById('mdp').value;
    var cmdp = document.getElementById('cmdp').value;

    if (!isNaN(nom)){
        alert("le nom doit etre alphabitique");
        return false;
    }else{if(!isNaN(prenom)){
        alert("le prenom doit etre alphabitique");
        return false;
    }

    }


}