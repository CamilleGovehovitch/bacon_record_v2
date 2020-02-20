const newsContainer = document.getElementById('newsContainer');
// const newsIcon = document.getElementById('newsIcon');
const newsCard = document.getElementById('newsCard');
let newsFlag = true;
newsContainer.addEventListener('mouseover', function(){
    newsContainer.classList.add('news-container-opened');
    // newsBell.style.justifyContent = 'flex-start';
}, false);
newsContainer.addEventListener("mouseleave", function(){
    newsContainer.classList.remove('news-container-opened');
    // newsBell.style.justifyContent = 'center';
}, false);
function openNewsContent(){
    if(newsFlag === true){
        newsCard.classList.add('news-card-opened');
        newsContainer.style.borderRadius = ' 25px  0px 0px 0px ';
        newsFlag = false;
    }else{
        newsCard.classList.remove('news-card-opened');
        newsContainer.style.borderRadius = ' 25px  0px 0px 25px ';
        newsFlag = true;
    }
}