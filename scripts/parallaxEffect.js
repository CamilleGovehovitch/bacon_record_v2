function parallax() {
    const nodeItems = document.getElementsByClassName('slide');
    for (let nodeItem of nodeItems) {
        let topPos = nodeItem.offsetTop - 70;
        let yPos = window.pageYOffset / nodeItem.dataset.speed;
        yPos = -yPos;
        let coords = '0% '+ (yPos) + 'px';

        nodeItem.style.backgroundPosition = coords ;
    }
}

window.addEventListener("scroll", function(){
    parallax();
});