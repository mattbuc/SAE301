liste = recupCookie("panier")
if (liste!=null)montab = JSON.parse(liste)
else montab =Array() 
console.log(montab)

var panier =0
montab.forEach(element => {   panier+= element.quantite }) 

document.getElementById('panier').innerHTML=panier

function recupCookie(nom){

    if(document.cookie.length === 0)return null;

    var cookies = document.cookie.split("; "); //separe chaque parametre contenu dans le cookie
    cookies.forEach(element => {
        ligne=element.split("=");
        if(ligne[0]===nom) sortie =ligne[1]
        else sortie=null;
    })
    return sortie
}

function showPassword() {
    var x = document.getElementById("inputPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}