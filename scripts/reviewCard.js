document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("track");
  const dotsWrap = document.getElementById("dots");
  const cards = Array.from(track.querySelectorAll(".glass-card"));
  const total = cards.length;
  let current = 0;
  let autoTimer;

  function cardStep() {
    const gap = 28;
    const card = cards[0];
    return card.getBoundingClientRect().width + gap;
  }

  function visibleCount() {
    const w = track.parentElement.clientWidth;
    const cs = cardStep();
    return Math.max(1, Math.floor((w + 28) / cs));
  }

  function maxIndex() {
    return Math.max(0, total - visibleCount());
  }

  function buildDots() {
    dotsWrap.innerHTML = "";
    const count = maxIndex() + 1;
    for (let i = 0; i < count; i++) {
      const d = document.createElement("button");
      d.className = "dot" + (i === current ? " active" : "");
      d.addEventListener("click", () => goTo(i));
      dotsWrap.appendChild(d);
    }
  }

  function updateUI() {
    const dotEls = dotsWrap.querySelectorAll(".dot");
    dotEls.forEach((d, i) => d.classList.toggle("active", i === current));
    cards.forEach((c, i) => c.classList.toggle("active", i === current));
  }

  function goTo(idx) {
    current = Math.min(Math.max(idx, 0), maxIndex());
    track.style.transform = `translateX(-${current * cardStep()}px)`;
    updateUI();
    resetAuto();
  }

  function next() {
    goTo(current >= maxIndex() ? 0 : current + 1);
  }
  function prev() {
    goTo(current <= 0 ? maxIndex() : current - 1);
  }

  function resetAuto() {
    clearInterval(autoTimer);
    autoTimer = setInterval(next, 4500);
  }

  // Event Listeners
  document.getElementById("next").addEventListener("click", next);
  document.getElementById("prev").addEventListener("click", prev);

  window.addEventListener("resize", () => {
    buildDots();
    goTo(Math.min(current, maxIndex()));
  });

  // Touch Swipe Logic
  let startX = 0;
  track.addEventListener(
    "touchstart",
    (e) => {
      startX = e.touches[0].clientX;
    },
    { passive: true },
  );
  track.addEventListener(
    "touchend",
    (e) => {
      const dx = e.changedTouches[0].clientX - startX;
      if (Math.abs(dx) > 40) dx < 0 ? next() : prev();
    },
    { passive: true },
  );

  // Initial Start
  buildDots();
  resetAuto();
});
