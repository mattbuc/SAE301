/* finalisation */

let mode1 = document.getElementById("mode1");
let mode2 = document.getElementById("mode2");
let carte = document.getElementById("carte");
let paypal = document.getElementById("paypal");

mode1.addEventListener("click", afficherMode1);
mode2.addEventListener("click", afficherMode2);

function afficherMode1(){
    carte.classList.remove("invisible_mode")
    paypal.classList.add("invisible_mode")
}

function afficherMode2(){
    paypal.classList.remove("invisible_mode")
    carte.classList.add("invisible_mode")
}

console.log("test")