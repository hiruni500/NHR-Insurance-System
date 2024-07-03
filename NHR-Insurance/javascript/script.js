const weapper=document.querySelector(".weapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".weapper i");

const carouselChildrens =[...carousel.children];




let isDragging =false,startX, startScrollLeft,timeoutId;

//Get the number of cards chat can fit the carousel at once
let cardperView = Math.round(carousel.offsetWidth / firstCardWidth);
//Insert copies of the last few card to biginning of carousel for infinite scrolling
carouselChildrens.slice(-cardperView).reverse().forEach(card =>{
    carousel.insertAdjacentHTML("afterbegin",card.outerHTML);
});

//Insert copies of the first few card to end of carousel for infinite scrolling
carouselChildrens.slice(0, -cardperView).forEach(card =>{
    carousel.insertAdjacentHTML("beforeend",card.outerHTML);
});



// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn =>{
    btn.addEventListener("click",() =>{
        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart =(e)=>{
    isDragging = true;
    carousel.classList.add("dragging");
    //Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft=carousel.scrollLeft;
}

const dragging =(e) =>{
    if(!isDragging) return; //if isDragging is false return from here
    //Updates the scroll position of the carusel based on the curor movement
    carousel.scrollLeft = e.pageX - (e.pageX - startX);
    
}

const dragStop =()=>{
    isDragging = false;
    carousel.classList.remove("dragging");
}

const autoPlay = () =>{
    if(window.innerWidth < 800)return;//return if window is smaller then 800
    //autoplay the carousel after every 2500ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

const infiniteScroll =() =>{
    //if the carousel is at the beginning,scroll to the end
    if(carousel.scrollLeft === 0){
        carousel.classList.add("no-transition");
        carousel.scrollLeft =carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    //if the carousel is at the beginning,scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }
    //clear existing timeout & start autoplay if mouse is not hovering over calrousel
    clearTimeout(timeoutId);
    if(!weapper.matches(":hover"))autoPlay();
}





carousel.addEventListener("mousedown",dragStart);
carousel.addEventListener("mousemove",dragging);
document.addEventListener("mouseup",dragStop);
carousel.addEventListener("scroll",infiniteScroll);
weapper.addEventListener("mouseenter",() => clearTimeout(timeoutId));
weapper.addEventListener("mouseleave",autoPlay);






