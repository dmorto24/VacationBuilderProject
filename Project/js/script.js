
var title = document.getElementById('dreamTitle');

if (title) {
  window.onscroll = function() {
    console.log('scrolling');
    var opacity = 1 - (title.offsetTop - window.scrollY) / 200;
    title.style.opacity = opacity < 0 ? 0 : opacity;
  };
}


var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
console.log(slider);
console.log(output);

output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}