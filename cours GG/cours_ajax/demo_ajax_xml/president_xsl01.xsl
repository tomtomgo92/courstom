<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="utf-8" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<xsl:template match="republique">
 <table>
    	<tr class="entete">
        <th>Nom</th>
        <th>Mandat</th>
        <th>Date de naissance</th>
        <th>Date décés</th>
        </tr>
    <xsl:for-each select="president">
        <tr>
        <td class="nom"><xsl:value-of select="nom" /></td>
        <td><xsl:value-of select="mandat" /></td>
        <td>
		<xsl:value-of select="naissance" /></td>
        <td>
		<xsl:value-of select="deces" /></td>
        </tr>
    </xsl:for-each>
    </table>

</xsl:template>
</xsl:stylesheet>