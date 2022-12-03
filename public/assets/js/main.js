var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}

/* navbar desktop */

let lien1 = document.getElementById("lien1");
let lien2 = document.getElementById("lien2");

let lesliens1 = document.getElementById("liens1");
let lesliens2 = document.getElementById("liens2");

lien1.addEventListener("click",function(){
  lesliens1.classList.toggle("invisible");
  lesliens2.classList.add("invisible");
})

lien2.addEventListener("click",function(){
  lesliens2.classList.toggle("invisible");
  lesliens1.classList.add("invisible");
})



