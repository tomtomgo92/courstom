function validForm(){
	var error=document.querySelector(".error");
	var mail=document.getElementById("mail").value;
	var psw=document.getElementById("psw").value;
	var condition=document.getElementById("condition").checked;
	var btn=document.getElementById("btn");

if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(mail)){
				
	error.innerHTML="Adresse e-mail valide";
	error.style.display="block";
	error.style.background="#2ecc71";
	error.style.border="none";
	error.style.color="#fff";
}
else{			
error.innerHTML="Adresse e-mail invalide";
error.style.display="block";
}

if (!mail || !psw || !/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(mail)
			) {
error.style.display="block";
error.style.background="#dd2c00";
error.innerHTML="Veuillez remplir le champ ou votre adresse e-mail est incorrecte";
}
else if(mail.length>255 || psw.length>20){
error.style.display="block";
error.style.background="#dd2c00";
error.innerHTML="Trop de caractères";
		}

else{
error.style.display="block";
error.style.background="#00c853";
error.innerHTML="Votre mail est "+mail+" <br> Votre mot de passe est "+psw;
}	
}	