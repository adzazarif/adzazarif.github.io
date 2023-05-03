window.addEventListener("scroll", function(){ 
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 1) 
   })


   document.addEventListener("DOMContentLoaded", function () {
    new TypeIt("#title", {
      strings: ["Front-End Developer"],
      loop: true,
      speed: 200,
    })
    .pause(1000)
    .move(-14)
    .delete(5)
    .type("Back")
    .pause(1000)
    .move(14)
    .delete()
    .type("UI/UX Designer")
    .pause(1000)
    .delete()
    .go();
  });

  document.addEventListener("DOMContentLoaded", function () {
    new TypeIt("#about-desc", {
      speed: 50,
    }).go();
  });

//   Animasi Scroll 
const fadersOut = document.querySelectorAll('.fade-out');
const fadersIn = document.querySelectorAll('.fade-in');
const fromLeft = document.querySelectorAll('.from-left');
const fromRight = document.querySelectorAll('.from-right');
const transparan = document.querySelectorAll('.transparan');
const smothIn = document.querySelectorAll('.smoth-in');
const appearOption = {
    threshold: 0,
    rootMargin: "0px 0px -100px 0px"
};

const appearOnScroll = new IntersectionObserver(function(
    entries,
    appearOnScroll
){
    entries.forEach(entry => {
        if (!entry.isIntersecting){
            return;
        }else{
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    })
},appearOption )

fadersIn.forEach(faderIn => {
    appearOnScroll.observe(faderIn);
})

fadersOut.forEach(faderOut => {
    appearOnScroll.observe(faderOut);
})

fromLeft.forEach(left => {
    appearOnScroll.observe(left);
})

fromRight.forEach(Right => {
    appearOnScroll.observe(Right);
})

transparan.forEach(trans => {
    appearOnScroll.observe(trans);
})

smothIn.forEach(smothI => {
    appearOnScroll.observe(smothI);
})