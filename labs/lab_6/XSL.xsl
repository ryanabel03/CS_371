<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
	<html>
		<body>
			<h3>Top 30 Companies</h3>
			<table border="1">
				<tr>
					<th>Rank</th>
					<th>Company</th>
					<th>Revenue</th>
				</tr>
				<xsl:for-each select="Companies/Company[not(position() > 30)]">
				<tr>
					<td><xsl:value-of select="rank"/></td>
					<td><xsl:value-of select="company"/></td>
					<td><xsl:value-of select="revenue"/></td>
				</tr>	
				</xsl:for-each>
			</table>
		</body>
	</html>
</xsl:template>

</xsl:stylesheet>
