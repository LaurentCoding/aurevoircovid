
const hamburger = document.getElementById("hamburger");
//const navMenu = document.querySelector('ul');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle("active");
  //navMenu.classList.toggle("active");
})

document.querySelectorAll("li").forEach(n => {
  n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  })
}) 

