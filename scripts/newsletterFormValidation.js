let newsletterInput = document.getElementById('newsletterInput');
let submitNewsLetter = document.getElementById('submitNewsLetter');
let emailRegex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

function enableNewsletter(){
    if(!newsletterInput.value.match(emailRegex)) {
        submitNewsLetter.disabled = true;
        newsletterInput.classList.add("not-valid-email");
    }else{
        submitNewsLetter.disabled = false;
        newsletterInput.classList.remove("not-valid-email");
        newsletterInput.classList.add("valid-email");
    }
}
