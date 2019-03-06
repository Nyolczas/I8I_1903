// Open the Modal
function openModal(modal) {
    document.getElementById(modal).style.display = "block";
    var content = document.getElementsByClassName('widthwrapper');
    for(i = 0; i < content.length; i++) {
      content[i].style.display = 'none';
    }
  }
  
  // Close the Modal
  function closeModal(modal) {
    document.getElementById(modal).style.display = "none";
    var content = document.getElementsByClassName('widthwrapper');
    for(i = 0; i < content.length; i++) {
      content[i].style.display = 'block';
    }
  }
  
  var slideIndex = 1;
  var modalIndex = 1;
  showSlides(modalIndex,slideIndex);
  
  // Next/previous controls
  function plusSlides(s,n) {
    showSlides(modalIndex=s,slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(s,n) {
    showSlides(modalIndex=s,slideIndex = n);
  }
  
  function showSlides(s,n) {
    var i;
    var slidename = "mySlides-"+s;
    var slides = document.getElementsByClassName(slidename);
    var dots = document.getElementsByClassName("demo" + s);
    var captionText = document.getElementById("caption" + s);
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }