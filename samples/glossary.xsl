<?xml version='1.0'?>
<xsl:stylesheet   version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="dl">

<dl>
      <xsl:for-each select="di" >
 <xsl:sort select="dt" />
        <dt><xsl:value-of select="dt"/></dt>
        <dd><xsl:value-of select="dd"/></dd>

      </xsl:for-each>
</dl>

</xsl:template>
</xsl:stylesheet>
