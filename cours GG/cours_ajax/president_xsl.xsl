<?xml version="1.0" encoding="utf-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="utf-8" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>predsident</title>
<style type="text/css">

p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.75em;
	width: 350px;
	
}
</style>
</head>

<body style="font-family:Arial; width:405px; display:block; margin:5px auto;">
<p>Faites appel à un fichier XSL pour afficher le document xml ci-dessous : <strong>durée 15 minutes</strong></p>
	
    <xsl:for-each select="republique/president">
    <div style="width:400px; font-size:12px; background-color:#3B5998;; border:solid 1px #036; color:#fff; padding:3px 0;">
    <span style="font-weight:bold; padding-left:4px;">
   
    <xsl:value-of select="nom"/>
    </span>
    </div>
    <div style="font-size:12pt; padding-left: 4px;">Mandat : <span>
   
    <xsl:value-of select="mandat"/>
    </span>
    </div>
    <div style="padding:4px; font-size:9pt; font-style:italic;">
    Biographie :
    <span>
    <br  />
    <xsl:value-of select="naissance"/>
    </span>
    <span style="font-style:italic;">
   <br  />
    <xsl:value-of select="deces"/>
    </span>
    </div>
    </xsl:for-each>
</body>
</html>

</xsl:template>
</xsl:stylesheet>