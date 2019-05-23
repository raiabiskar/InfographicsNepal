var t1 = new TimelineMax({ paused: false });
t1.from("#bg", 1, { opacity: 0, scale: 1 });
t1.from("#car", 3, { opacity: 0, scale: 2 });
t1.from("#license", 3, { opacity: 0, scale: 2 });
t1.from("#tlight", 3, { opacity: 0, scale: 2 });
t1.from("#traffic", 3, { opacity: 0, scale: 2 });

var t2 = new TimelineMax();
t2.from("#header", 1, { opacity: 0, scale: 1 });
t2.from("#edition", 1, { opacity: 0, scale: 1 });
t2.from("#goal", 1, { opacity: 0, scale: 1 });
t2.from("#best", 1, { opacity: 0, scale: 1 });

const divSelector = document.querySelector(".card-left");
const btn = document.querySelector(".play-svg");

var t3 = new TimelineMax({ paused: true });
t3.from("#bg-fine", 1, { opacity: 0 });
t3.from("#policeman", 2.5, { opacity: 0, scale: 1 });
t3.from("#fine1", 2.5, { opacity: 0, scale: 1, ease: Bounce.easeIn, y: -500 });
t3.from("#fine2", 2.5, { opacity: 0, scale: 1, ease: Bounce.easeIn, y: -500 });
t3.from("#fine3", 2.5, { opacity: 0, scale: 1, ease: Bounce.easeIn, y: -500 });
t3.to("#bg-fine", 1, { opacity: 1 });

btn.addEventListener("click", () => {
  t3.play();
});
