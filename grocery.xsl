<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
        <body>
            <h2>My Grocery Collection</h2>
            <table border="1">
                <tr bgcolor="#9acd32">
                    <th> Item </th>
                    <th> quantity </th>
                    <th> price </th>
                    <th> Brand </th>
                </tr>
                <xsl:for-each select="groceries/grocery">
                <tr>
                    <td><xsl:value-of select="item"/></td>
                    <td><xsl:value-of select="quantity"/></td>
                    <td><xsl:value-of select="price"/></td>
                    <td><xsl:value-of select="brand"/></td>
                </tr>
                </xsl:for-each>
            </table>
        </body>
    </html>

</xsl:template>

</xsl:stylesheet>



