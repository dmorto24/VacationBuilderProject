var title = document.getElementById('dreamTitle');

if (title) {
  window.onscroll = function() {
    console.log('scrolling');
    var opacity = 1 - (title.offsetTop - window.scrollY) / 200;
    title.style.opacity = opacity < 0 ? 0 : opacity;
  };
}
var slider = document.getElementById("budget");
var output = document.getElementById("slider_value");
output.innerHTML = slider.value;

slider.oninput = function() {
	output.innerHTML = this.value;
}

function rental_cars()
{
	document.getElementById("rentals").style.display="contents";
}

function something(x)
{
	alert(x);
}