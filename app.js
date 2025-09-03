const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    // console.log("ENTRY NOT GLB", entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
});
const hiddenElement = document.querySelectorAll(".hidden");
hiddenElement.forEach((el) => observer.observe(el));

const menuBtn = document.getElementById("menu-btn");
const menu1 = document.getElementById("menu");
const menu2 = document.getElementById("menu-btn2");

menuBtn.addEventListener("click", () => {
  console.log("Hello");

  menu1.classList.toggle("active");
  menu2.classList.toggle("active");
});
