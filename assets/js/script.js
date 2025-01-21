const imageNames = ["s1.png", "s2.png", "s3.png", "s4.png","s5.png","s4.png"]

const sliderItems = imageNames.concat(imageNames);
const sliders = document.querySelectorAll(".slide-track");

sliders.forEach((slider, index) => {
  slider.innerHTML = ""; 

  sliderItems.forEach((sliderItem) => {
    const img = document.createElement("img");
    img.src = "./assets/img/" + sliderItem; 
    img.className = "slide-item";
    slider.appendChild(img);
  });
});


