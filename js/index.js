function openNav() {
    document.getElementById("toggle-icons").classList.toggle('slide')    
  }
  
window.onclick = function(event) {
    if (!event.target.matches('.trigger')){
        var dropdown = document.getElementsByClassName('content');
        for (var i = 0; i < dropdown.length; i++) {
            var openDropdown = dropdown[i];
            if (openDropdown.classList.contains('show')){
                openDropdown.classList.remove('show');
            }
        }
    }
}

function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
}

const carousel = document.querySelector('.carousel');
const carouselInner = document.querySelector('.carousel-inner');
const slides =  document.querySelectorAll('.carousel-inner .carousel-item');
let totalSlides = slides.length;
let step = 100 / totalSlides;
let activeSlide = 0;
let activeIndicator = 0;
let direction = -1;
let jump = 1;
let interval = 5000;
let time;

carouselInner.style.minWidth = (totalSlides * 100) + '%';

carouselInner.addEventListener('transitionend',()=>{
    if(direction === -1){
        if(jump > 1){
            for(let i = 0; i < jump; i++){
                activeSlide++;
                carouselInner.append(carouselInner.firstElementChild);
            }
        }else{
            activeSlide++;
            carouselInner.append(carouselInner.firstElementChild);
        }
    }else if(direction === 1){
        if(jump > 1){
            for(let i = 0; i < jump; i++){
                activeSlide--;
                carouselInner.prepend(carouselInner.lastElementChild);
            }
        }else{
            activeSlide--;
            carouselInner.prepend(carouselInner.lastElementChild);
        }
    };
    carouselInner.style.transition = 'none';
    carouselInner.style.transform = 'translateX(0%)';
    setTimeout(()=>{
        jump = 1;
        carouselInner.style.transition = 'all ease .5s';
    });
});

function slideToNext(){
    if(direction === 1){
        direction = -1;
        carouselInner.prepend(carouselInner.lastElementChild);
    };
    
    carousel.style.justifyContent = 'flex-start';
    carouselInner.style.transform = `translateX(-${step}%)`;
};

function slideToPrev(){
    if(direction === -1){
        direction = 1;
        carouselInner.append(carouselInner.firstElementChild);
    };
    carousel.style.justifyContent = 'flex-end'
    carouselInner.style.transform = `translateX(${step}%)`;
};
setInterval(()=>{slideToNext();},interval);


let menu = document.getElementById("myMenu");
let search = document.getElementById("mySearch");
search.addEventListener("click", function () {
    menu.classList.toggle('show');
})

