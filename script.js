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
