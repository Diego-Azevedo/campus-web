var images = [
  { src: "img/image1.png"},
  { src: "img/image2.png"},
  { src: "img/image3.png"},
  { src: "img/image4.png"},
  { src: "img/image5.png"},
  { src: "img/image6.png"}
];
var currentImageIndex = 0;

function showNextImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  updateImageAndDescription();
  updateNavigationButtons();
}

function showPreviousImage() {
  currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
  updateImageAndDescription();
  updateNavigationButtons();
}

function updateImageAndDescription() {
  var image = images[currentImageIndex];
  var imgElement = document.getElementById("carousel-image");
  var descriptionElement = document.getElementById("carousel-description");

  imgElement.src = image.src;
  descriptionElement.textContent = image.description;
}

function updateNavigationButtons() {
  var previousButton = document.getElementById("previous-button");
  var nextButton = document.getElementById("next-button");

  previousButton.disabled = currentImageIndex === 0;
  nextButton.disabled = currentImageIndex === images.length - 1;

  if (currentImageIndex === images.length - 1) {
    nextButton.style.visibility = "hidden";
  } else {
    nextButton.style.visibility = "visible";
  }
}

document.addEventListener("DOMContentLoaded", function() {
  updateImageAndDescription();
  updateNavigationButtons();
  setTimeout(showNextImage, 10000);
});
