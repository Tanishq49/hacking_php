// Smooth background animation
let x = 20,
  y = 30;
let targetX = x,
  targetY = y;

function animateBg() {
  // Gradually move towards target
  x += (targetX - x) * 0.08;
  y += (targetY - y) * 0.08;
  document.body.style.background = `radial-gradient(circle at ${x}% ${y}%, #6366f1 0%, transparent 60%), var(--bg)`;
  requestAnimationFrame(animateBg);
}

setInterval(() => {
  targetX = Math.random() * 80 + 10;
  targetY = Math.random() * 60 + 20;
}, 4000);

animateBg();
