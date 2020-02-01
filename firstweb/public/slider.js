var slideIndex = 0;
show();

function show() {
var i;
var slides = document.getElementsByClassName("slide");
for (i = 0; i < slides.length; i++) {
   slides[i].style.display = "none";
}

slideIndex = slideIndex+1;
if (slideIndex > slides.length) {
   slideIndex = 1;
}
slides[slideIndex-1].style.display = "block";
setTimeout(show, 2000); // Change image every 2 seconds
}