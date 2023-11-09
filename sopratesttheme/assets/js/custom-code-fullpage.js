
//INITIALIZER for Fullpage.js
new fullpage('#fullpage', {
    //options here
    autoScrolling:true,
    scrollHorizontally: true
});

/*
Vertical arrows >not included in fullpage.Js
*/
document.addEventListener('DOMContentLoaded', function() {
  var moveUpArrows = document.querySelectorAll('.moveUpArrow');
  var moveDownArrows = document.querySelectorAll('.moveDownArrow');

  moveUpArrows.forEach(function(moveUpArrow, index) {
    moveUpArrow.addEventListener('click', function() {
      if (typeof fullpage_api !== 'undefined') {
        fullpage_api.moveSectionUp(index + 1); // Adjust for the 1-based section index
      }
    });
  });

  moveDownArrows.forEach(function(moveDownArrow, index) {
    moveDownArrow.addEventListener('click', function() {
      if (typeof fullpage_api !== 'undefined') {
        fullpage_api.moveSectionDown(index + 1); // Adjust for the 1-based section index
      }
    });
  });
});


//////////////////////
let sliderContainer = document.querySelector(".slider-container");
let innerSlider = document.querySelector(".inner-slider");

let pressed = false;
let startX;
let x;

sliderContainer.addEventListener("mousedown", (e) => {
    pressed = true;
    startX = e.offsetX - innerSlider.offsetLeft;
    sliderContainer.style.cursor = "grabbing";
});

sliderContainer.addEventListener("mouseenter", () => {
    sliderContainer.style.cursor = "grab";
});

sliderContainer.addEventListener("mouseleave", () => {
    sliderContainer.style.cursor = "default";
});

sliderContainer.addEventListener("mouseup", () => {
    sliderContainer.style.cursor = "grab";
    pressed = false;
});

window.addEventListener("mouseup", () => {
    // pressed = false;
});

sliderContainer.addEventListener("mousemove", (e) => {
    if (!pressed) return;
    e.preventDefault();

    x = e.offsetX;

    innerSlider.style.left = `${x - startX}px`;

    checkBoundary();
});

const checkBoundary = () => {
    let outer = sliderContainer.getBoundingClientRect();
    let inner = innerSlider.getBoundingClientRect();

    if (parseInt(innerSlider.style.left) > 0) {
        innerSlider.style.left = "0px";
    }

    if (inner.right < outer.right) {
        innerSlider.style.left = `-${inner.width - outer.width}px`;
    }
};