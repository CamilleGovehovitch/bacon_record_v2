document.getElementById('newsletterForm').addEventListener('submit', function(e){
    e.preventDefault();

    //instantiation de l'objet xmlHTTPRequest
    let xhr = new XMLHttpRequest();

    //Changement d'etat de la request
    xhr.onreadystatechange = function(){

        //traitement de la requete uniquement si elle a bien été éffectuée.
        if(this.readyState === 4 && this.status === 200){
             console.log(document.getElementById('newsletterInput').value);
             console.log('hello');
             console.log(this.response);
        }else if(this.readyState === 4){
            alert('Une erreur est survenue...')
        }
        console.log(this);
    };
    xhr.open('POST','async/ajaxRequestNewsLetter.php', true );
    xhr.send();
    return false;
});
