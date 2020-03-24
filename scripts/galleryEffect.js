

function gallery(event) {
    console.log(event);
    const option = document.getElementsByClassName('option');
    for (let opt of option){
            opt.classList.remove('active');
    }
    event.target.classList.add('active');
}
