import ScrollReveal from 'scrollreveal'
// init controller
var controller = new ScrollMagic.Controller();

ScrollReveal().reveal('.navbar', {
  duration: 3800,
  origin: 'bottom',
  distance: '100px'
});

ScrollReveal().reveal('.scroll-about', {
  reset: true,
  duration: 3800,
  origin: 'top',
  distance: '100px'
});

ScrollReveal().reveal('.hand-red-card', {
  reset: true,
  duration: 3800,
  origin: 'top',
  distance: '100px'
});


// build scenes
var revealElements = document.getElementsByClassName("sponsor");
for (var i = 0; i < revealElements.length; i++) { // create a scene for each element
  new ScrollMagic.Scene({
      triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
      offset: 50, // start a little later
      triggerHook: 0.9,
    })
    .setClassToggle(revealElements[i], "visible") // add class toggle
    .addTo(controller);
}


TweenLite.defaultEase = Linear.easeNone;
var tl = new TimelineMax();
tl.from("section.panel.mission", 1, { xPercent: 100 });
tl.from("section.panel.vision", 1, { xPercent: -100 });

new ScrollMagic.Scene({
    triggerElement: "#pinMaster",
    triggerHook: "onLeave",
    duration: "200%"
  })
  .setPin("#pinMaster")
  .setTween(tl)
  .addTo(controller);