
const newsContainer = document.getElementById('newsContainer');
const newsCard = document.getElementById('newsCard');
let newsFlag = true;


newsContainer.addEventListener('mouseover', function(){
    newsContainer.classList.add('news-container-opened');
}, false);
newsContainer.addEventListener("mouseleave", function(){
    newsContainer.classList.remove('news-container-opened');
    newsCard.classList.remove('news-card-opened');
    newsContainer.style.borderRadius = ' 25px  0px 0px 25px ';
    newsFlag = true;
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