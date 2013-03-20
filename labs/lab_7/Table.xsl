<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
	<body>
		<table border="1">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Phone #</th>
			</tr>
			<xsl:for-each select="clients/client">
				<tr>
					<td>
						<xsl:value-of select="firstName"/>
					</td>
					<td>
						<xsl:value-of select="lastName"/>
					</td>
					<td>
						<xsl:value-of select="address"/>
					</td>
					<td>
						<xsl:value-of select="phoneNumber"/>
					</td>
				</tr>
			</xsl:for-each>
		</table>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>
