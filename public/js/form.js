// First Part : Animation Effect Enter on right

// Sliding Animation
var slideIndex = 1;
showSlides(slideIndex);


//Next/previous controls
function plusSlides(n) {
    showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides((slideIndex = n));
  }
  

  
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('f-a');
    // var dots = document.getElementsByClassName('dot');
  
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
        
        slideIndex = 1;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }
    slides[slideIndex - 1].style.display = 'block';
    slides[slideIndex - 1].style.animation = 'EnterRight 0.5s';
}
  
// Second Part : Verification form

//Delete default action buttons
var $btn = $('button');

$btn.click(function(e) {
  e.preventDefault();
});