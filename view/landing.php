
<div class="carousel-wrapper">
        <div class="carousel fade">
            <!-- <img class="carousel_photo initial" src="assets/293973.jpg" alt=""> -->
            <img src="Asset/carousel/car1.jpg" alt="carousel1">
        </div>
        <div class="carousel fade">
            <img src="Asset/carousel/car2.jpg" alt="carousel2">
        </div>
        <div class="carousel fade">
            <img src="Asset/carousel/car3.jpg" alt="carousel3">
        </div>
       
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div>
        SOMETHING
    </div>

    <div class="Grid_Container">
        <div class="grid-item featurekiri">1</div>
        <div class="grid-item desckiri">2</div>
        <div class="grid-item desckanan">3</div>
        <div class="grid-item featurekanan">4</div>
        <div class="grid-item featurekiri">5</div>
        <div class="grid-item desckiri">6</div>
    </div>
<div class="highlight">
    popular track<br>
    <div class="popular_track">
        <div class="pop-item">
            pop1
        </div>

        <div class="pop-item">
            pop2
        </div>

        <div class="pop-item">
            pop3
        </div>

        <div class="pop-item">
            pop4
        </div>
    </div>
</div>
<br>
<div class="highlight">
    Region track<br>
    <div class="region_track">
        <div class="region-item">
            Reg1
        </div>

        <div class="region-item">
            Reg2
        </div>

        <div class="region-item">
            Reg3
        </div>

        <div class="region-item">
            Reg4
        </div>
    </div>
</div>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>