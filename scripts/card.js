let items = document.querySelectorAll(".slider .item");
let active = 0; // Start at first card

function loadShow() {
  // Reset active card
  items[active].style.transform = `none`;
  items[active].style.zIndex = 1;
  items[active].style.filter = "none";
  items[active].style.opacity = 1;

  // Show items after active
  let stt = 0;
  for (var i = active + 1; i < items.length; i++) {
    stt++;
    items[i].style.transform =
      `translateX(${150 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
    items[i].style.zIndex = -stt;
    items[i].style.filter = "blur(5px)";
    items[i].style.opacity = stt > 2 ? 0 : 0.6;
  }

  // Show items before active
  stt = 0;
  for (var i = active - 1; i >= 0; i--) {
    stt++;
    items[i].style.transform =
      `translateX(${-150 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
    items[i].style.zIndex = -stt;
    items[i].style.filter = "blur(5px)";
    items[i].style.opacity = stt > 2 ? 0 : 0.6;
  }
}

loadShow();

let next = document.getElementById("next");
let prev = document.getElementById("prev");

next.onclick = function () {
  if (active + 1 < items.length) {
    active = active + 1;
    loadShow();
  }
};

prev.onclick = function () {
  if (active - 1 >= 0) {
    active = active - 1;
    loadShow();
  }
};
