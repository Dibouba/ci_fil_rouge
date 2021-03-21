document.getElementById("valide").addEventListener("submit", function(e){
    var erreur;
    /*Declareation des variables filtres*/
    var filtmail = new RegExp ("^[a-z0-9.-]+@+[a-z0-9.-]{2,}.[a-z]{2,4}$");
    var filmotdepas = new RegExp ("^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$@])\S{8,12}$");
    // var filconfir = new RegExp ("^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$@])\S{8,12}$");
    var filitre = new RegExp("^[A-Za-z]+$");
    var filadresse = new RegExp ("^[0-9] [A-Za-z]+ [A-Za-z]+ [A-Za-z]+$");
    var filcodpos = new RegExp ("^[0-9]{5}$");
    var filville = new RegExp ("^[A-Za-z]+$");
    /*Declaration des variables*/
    var mail = filtmail.test(document.getElementById("mail").value);
    var motdepa = filmotdepas.test(document.getElementById("password").value);
    var confir = filmotdepas.test(document.getElementById("confi").value);
    var prenom = filitre.test(document.getElementById("prenom").value);
    var nom = filitre.test(document.getElementById("nom").value);
    var adresse = filadresse.test(document.getElementById("adresse").value);
    var codpos = filcodpos.test(document.getElementById("codpost").value);
    var ville = filville.test(document.getElementById("ville").value);
    var pays = filitre.test(document.getElementById("pays").value);
    if(!mail){
        erreur="le mail est incorrect";
    }
    if(!motdepa){
        
        erreur="le mot de passe doit comporter de lettre majuscule et miniscule et des caractéres speciaux";
    }
    
    if(!confir){
        erreur="le mot de passe n'est pas identique";
    }
    if(!prenom){
        erreur="Veuillez renseigner votre prénom";
    }
    if(!nom){
        erreur="Veuillez renseigner votre nom";
    }
    if(!adresse){
        erreur="Veuillez renseigner votre adresse postale";
    }
    if(!codpos){
        erreur="Veuillez renseigner votre code postal";
    }
    if(!ville){
        erreur="Veuillez renseigner votre ville";
    }
    if(!pays){
        erreur="veuillez renseigner votre pays";
    }
    if(erreur){
        e.preventDefault();
        document.getElementById("erreur").innerHTML=erreur;
        return false;
    }
    else{

        alert ("Formulaire envoyé");
    }
    })
    

