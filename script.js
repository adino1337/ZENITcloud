const header = document.getElementById('header');
window.addEventListener('scroll', () => {
    header.classList.add('scroll')
    if(window.pageYOffset == 0){
        header.classList.remove('scroll')
    }
})

const slides = document.querySelectorAll('.napisali')
const circles = document.querySelectorAll('.circle')
var activeSlide = 0;
var delay = 5000;
function napisali(){
    circles.forEach(kruzko => {
        kruzko.classList.remove('activeSpan')
    })
    slides[activeSlide].classList.remove('activeSlide')    
    activeSlide = (activeSlide+1)%circles.length;
    document.querySelector("[data-active-slide='"+activeSlide+"']").classList.add('activeSpan')
    slides[activeSlide].classList.add('activeSlide')
}

interval = setInterval(napisali, delay)



circles.forEach(circle => {
    circle.addEventListener('click', () => {
        clearInterval(interval) 
        circles.forEach(kruzko => {
            kruzko.classList.remove('activeSpan')
        })
        slides[activeSlide].classList.remove('activeSlide') 
        activeSlide = circle.dataset.activeSlide
        document.querySelector("[data-active-slide='"+activeSlide+"']").classList.add('activeSpan')

        slides[activeSlide].classList.add('activeSlide')
        
        interval = setInterval(napisali, delay)       
    })
});


const historyDiv = document.getElementById('history')
const futureDiv = document.getElementById('future')

const historyBTN = document.getElementById('historyBTN')
const futureBTN = document.getElementById('futureBTN')

historyBTN.addEventListener('click', () => {
    futureBTN.classList.remove('activeH4')
    historyBTN.classList.add('activeH4')
    futureDiv.classList.remove('aboutActive')
    historyDiv.classList.add('aboutActive')
})

futureBTN.addEventListener('click', () => {
    futureBTN.classList.add('activeH4')
    historyBTN.classList.remove('activeH4')
    futureDiv.classList.add('aboutActive')
    historyDiv.classList.remove('aboutActive')
})

