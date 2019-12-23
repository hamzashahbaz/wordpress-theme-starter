ScrollReveal({ reset: true, duration: 1100 });
ScrollReveal().reveal('.scrollreveal');

document.addEventListener("DOMContentLoaded", function(){
    function myFunction() {
        var x = document.querySelector(".header__mobile-nav");
        if (x.style.display === "block") {
        x.style.display = "none";
        } else {
        x.style.display = "block";
        }
    }
    document.querySelector(".header__mobile-icon").onclick = myFunction;
});