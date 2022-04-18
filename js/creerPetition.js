function verif() {
    titre = document.getElementById('titre').value;
    des = document.getElementById('titre-ex').value;
    file = document.getElementById('image').value;

    alert("test");

    if (titre == ""){
        alert("le titre de pétition vide!");
        return false;
    }else if (des == ""){
        alert("la decription de la pétition vide !");
        return false;
    }else if (des.length >250){
        alert("la description doit etre au maximum de 250 caractère");
        return false;
    }else if (file.trim() == ""){
        alert("choisissez une image pour la pétition");
        return false;
    }

}