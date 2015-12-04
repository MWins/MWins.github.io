<?xml version='1.0'?>
<xsl:stylesheet   version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
       <xsl:output method="html" indent="yes"/>
<xsl:template match="dl">
  <html>
      
      <head><title>Glossary XML</title>
      
      <style>
h2 { font-family: sans-serif; margin: 0; padding: 0; }          
dl { }
dt {  float:left; min-width: 120px;  clear: left; margin: .3em  0; border-bottom: 1px solid rgba(0,0,0,.1);  text-align:center;  padding-bottom: .2em;}
dd {  float:left;  width: 250px;  border-bottom: 1px solid rgba(0,0,0,.1);  margin: .3em 0; padding-bottom: .2em;} 

dd::after { width: 100%; clear:both; }



      </style></head>
      <body>
            <h2> XML - XSL Glossary Example </h2>
<dl>    


      <xsl:for-each select="di" >
 <xsl:sort select="dt" />
        <dt><xsl:value-of select="dt"/></dt>
        <dd><xsl:value-of select="dd"/></dd>

      </xsl:for-each>
</dl>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
