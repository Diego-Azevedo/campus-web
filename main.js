var images = [
  { src: "img/image1.png"},
  { src: "img/image2.png"},
  { src: "img/image3.png"},
  { src: "img/image4.png"},
  { src: "img/web1.png"}
];
var currentImageIndex = 0;

function showNextImage() {
  var image = images[currentImageIndex];
  var imgElement = document.getElementById("carousel-image");
  var descriptionElement = document.getElementById("carousel-description");
  
  imgElement.src = image.src;
  descriptionElement.textContent = image.description;
  
  currentImageIndex = (currentImageIndex + 1) % images.length;
  setTimeout(showNextImage, 5000);
}

document.addEventListener("DOMContentLoaded", function() {
  showNextImage();
});
