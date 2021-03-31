// banner
var banner = document.getElementById("img-banner");
var i = 1;
var timenext = setInterval(next, 5000);

function next() {
    i++;
    if (i > 3) {
        i = 1;
    }
    banner.src = "./img/" + i + ".jpg ";

}

function prev() {
    i--;
    if (i < 1) {
        i = 3;
    }
    banner.src = "./img/" + i + ".jpg ";

}