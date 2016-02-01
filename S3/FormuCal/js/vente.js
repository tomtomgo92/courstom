function cal(){

var quantite=document.getElementById("quant").value;
var prixUnitaire=document.getElementById("prix").value;;
var prixtotal=prixUnitaire*quantite;
var toto=document.getElementById("totaux");
var button=document.getElementById("button");

toto.innerHTML=(prixtotal+" €");

}

button.addEventListener("click", cal, false)

