
	var xml = loadXML('president02.xml');
	var xsl = loadXML('president_xsl01.xsl');
	function loadXML(url) {
	var xhr;

	// code pour Firefox
		if (document.implementation.createDocument) {
		xhr = new XMLHttpRequest();
		xhr.open('GET', url, false);
		xhr.send(null);
		if (xhr.readyState == 4){
		xhr = xhr.responseXML;
		} 
	} 
	// code pour IE7
		else if (window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
		xhr.open('GET', url, false);
		xhr.send(null);
		if (xhr.readyState == 4){
		xhr = xhr.responseXML;
		}
	}
	//code pour IE6, IE5.5 et IE5
		else if (window.ActiveXObject) {
		var xhr = new ActiveXObject("Microsoft.XMLDOM");
		xhr.async = false;
		xhr.load(url);
		}
	return xhr;
	}

	function transform(xml, xsl, id){
			if (window.XSLTProcessor) {
			var fragment;
			
			var xsltProcessor = new XSLTProcessor();
			xsltProcessor.importStylesheet(xsl);
			fragment = xsltProcessor.transformToFragment(xml, document);
			var target = document.getElementById(id);
			target.innerHTML="";
			target.appendChild(fragment);
			document.appendChild(target);
			
			} 
		else if (window.ActiveXObject) {
		var target = document.getElementById(id);
		target.innerHTML = xml.transformNode(xsl);
		
		}
		
	}
	/*window.onload=function(){
		
		transform(xml, xsl, 'transform');
		
	}*/
	window.addEventeListener('click',transform,false);