
var objRequete;
if(navigator.appName.search("Microsoft")>-1){
	objRequete=new ActiveXObject("MSXML2.XMLHTTP");
}
else{
	objRequete=new XMLHttpRequest();
}
function envReq(){
	for(i=1;i<=14;i++){
		if(this.document.f.bundesland.options[i-1].selected){
			objRequete.open('get','lander.php?choix='+i,true);
			objRequete.onreadystatechange=traiteReponse;
			objRequete.send(null);
			break;
		}
	}
}
function traiteReponse(){
	if(objRequete.readyState==4){
		document.getElementById("capitale").innerHTML=objRequete.responseText;
		document.getElementById("capitale").style.display="block";
	}
}