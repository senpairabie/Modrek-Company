const imageNames = ["s1.png", "s2.png", "s3.png", "s4.png","s7.png","s6.png"]

const sliderItems = imageNames.concat(imageNames);
const sliders = document.querySelectorAll(".slide-track");

sliders.forEach((slider, index) => {
  slider.innerHTML = ""; // Kosongkan isi slider sebelum menambahkan gambar

  sliderItems.forEach((sliderItem) => {
    const img = document.createElement("img");
    img.src = "./assets/img/" + sliderItem; //path to your folder image
    img.className = "slide-item";
    slider.appendChild(img);
  });
});
