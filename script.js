


/* ar changeToEngButton = document.getElementById("#changeToEng");
changeToEngButton.onclick = changeToEng(); */



/* var images = ["skyline.jpg", "img/html.jpg"];
var background = document.getElementById("main-wrapper-img");


  setInterval(() => {
    for (i = 0; i <= images.length; i++) {
      background.style.backgroundImage = 'url(' + images[i] + ')';
    }
  }, 1000);
   */

/* -------------------------------------------------------------------------------------- */
/* Typing effect  gesehn bei https://www.youtube.com/watch?v=POX3dT-pB4E */

class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10); /* ohne "parseInt" wäre es nur ein String, (wait, 10 = "base10 number") */
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of the word 
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];
    // Check if its deleting
    if(this.isDeleting) {
      // Delete a char
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add a char
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert text into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Type Speed
    let typeSpeed = 100;

    if (this.isDeleting) {
      typeSpeed /=2;  /* typeSpeed = typeSpeed / 2 */
    }

    // If word is complete
    if (!this.isDeleting && this.txt === fullTxt) {
      // Make a break for x msec.
      typeSpeed = this.wait;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 360;
    }
    setTimeout(() => this.type(), typeSpeed);
  }
}

// Initialisation (Init) on DOM Load

document.addEventListener('DOMContentLoaded', init); /* event we listen to/for:DOMContentLoaded run a function called "init" */
// Init
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  new TypeWriter(txtElement, words, wait);
}

/* -----------------------------------------------------------------------------------------------------------------------
 */

/* das hier kann man auch mit CSS machen aber naja... */

const cards = document.querySelectorAll(".portfolio-card-wrapper");

cards.forEach(card => {
  card.addEventListener('mouseover', () => {
    card.childNodes[1].classList.add('img-darken');
  })

  card.addEventListener('mouseout', () => {
    card.childNodes[1].classList.remove('img-darken');
  })
})

/* var footer = document.getElementById("footer");
footer.onclick = function() {
window.scrollTo({ top: 0, left: 0, behavior: "smooth" });
}

var werdegang = document.getElementById("werdegang");
werdegang.onclick = function() {
window.scrollTo({ top: 760, left: 0, behavior: "smooth" })
}
 */


/* SLIDER________________________________________________________ */

const carouselSlide = document.querySelector(".carousel-slide");
const carouselImages = document.querySelectorAll(".carousel-slide img");

const btnNext = document.querySelector("#btnNext");
const btnPrev = document.querySelector("#btnPrev");

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)"; 

btnNext.addEventListener('click', () => {
    if(counter >= carouselImages.length - 1) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
});

btnPrev.addEventListener('click', () => {
    if(counter <=0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
});

carouselSlide.addEventListener('transitionend', () => {
    console.log(counter);
    console.log(carouselImages[counter]);
    if (carouselImages[counter].id === "lastClone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length -2;
        carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
    if (carouselImages[counter].id === "firstClone") {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length -counter;
        carouselSlide.style.transform = "translateX(" + (-size * counter) + "px)";
    }
});


