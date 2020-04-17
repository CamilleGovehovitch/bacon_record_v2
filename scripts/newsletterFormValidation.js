let newsletterInput = document.getElementById('newsletterInput');
let submitBtn = document.getElementById('submitBtn');
let emailRegex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

function enableNewsletter(){
    if(!newsletterInput.value.match(emailRegex)) {
        submitBtn.disabled = true;
        newsletterInput.classList.add("not-valid-email");
    }else{
        submitBtn.disabled = false;
        newsletterInput.classList.remove("not-valid-email");
        newsletterInput.classList.add("valid-email");
    }
}
