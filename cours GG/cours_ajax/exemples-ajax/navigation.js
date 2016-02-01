// JavaScript Document
var xhr=null;
	function open_url(url){
	//alert(typeof(url));
	if(window.XMLHttpRequest){
	xhr=new XMLHttpRequest();
	}
	else{
	if(window.ActiveXObject){
		try{
		xhr=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e){}
		}
	}
xhr.onreadystatechange=function(){
response();
	}
	xhr.open("GET",url,true);
	/*alert(url);*/
	xhr.send(null);
	}
function response(){
	if(xhr.readyState==4){
		if(xhr.status==200){

	document.getElementById("contenu").innerHTML=xhr.responseText;
	document.getElementById("contenu").style.display="block";
		}
		else{
		
		document.getElementById("contenu").innerHTML="<p>La page n'est pas disponible.<br /><br />Erreur: " +xhr.status+"</p>";
		
		}
	}
}