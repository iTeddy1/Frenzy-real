const header = document.querySelector("header");

window.addEventListener ("scroll", function(){
header.classList.toggle ("sticky",this.window.scrollY > 0);
})

let currentSlide = 1;
const totalSlides = 3; 

function showSlide(n) {
    for (let i = 1; i <= totalSlides; i++) {
        document.getElementById(`carousel-item-${i}`).classList.remove('opacity-100');
        document.getElementById(`carousel-item-${i}`).classList.add('opacity-0');
    }
    document.getElementById(`carousel-item-${n}`).classList.remove('opacity-0');
    document.getElementById(`carousel-item-${n}`).classList.add('opacity-100');
    currentSlide = n;
    updateIndicators();
}

function nextSlide() {
    if (currentSlide < totalSlides) {
        showSlide(currentSlide + 1);
    } else {
        showSlide(1); 
    }
}

function prevSlide() {
    if (currentSlide > 1) {
        showSlide(currentSlide - 1);
    } else {
        showSlide(totalSlides); 
    }
}

function updateIndicators() {
    for (let i = 1; i <= totalSlides; i++) {
        const indicator = document.getElementById(`carousel-indicator-${i}`);
        if (i === currentSlide) {
            indicator.setAttribute('aria-current', 'true');
        } else {
            indicator.setAttribute('aria-current', 'false');
        }
    }
}
document.getElementById('data-carousel-prev').addEventListener('click', function() {
    prevSlide();
});

document.getElementById('data-carousel-next').addEventListener('click', function() {
    nextSlide();
});

for (let i = 1; i <= totalSlides; i++) {
    document.getElementById(`carousel-indicator-${i}`).addEventListener('click', function() {
        showSlide(i);
    });
}
function increaseValue() {
    var value = parseInt(document.getElementById('numberInput').innerText, 10);
    value = isNaN(value) ? 0 : value;
    if (value < 4) { // Kiểm tra nếu giá trị hiện tại nhỏ hơn 4
        value++;
        document.getElementById('numberInput').innerText = value;
    }
}

function decreaseValue() {
    var value = parseInt(document.getElementById('numberInput').innerText, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) { // Kiểm tra nếu giá trị hiện tại lớn hơn 1
        value--;
        document.getElementById('numberInput').innerText = value;
    }
}

  


  
