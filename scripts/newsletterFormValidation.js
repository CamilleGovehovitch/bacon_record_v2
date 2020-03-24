let newsletterInput = document.getElementById('newsletterInput');
let submitBtn = document.getElementById('submitBtn');
let email = document.getElementById('newsletterInput');
console.log(newsletterInput.value);

function enableNewsletter(){
    if(newsletterInput.value === "") {
        submitBtn.disabled = true;
    }else{
        submitBtn.disabled = false;
    }
}
