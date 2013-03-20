<?php
	$con = mysql_connect("cis.gvsu.edu","abelr","abelr1500");
        if (!$con){
        	echo '<p>Error connecting to db</p>';
        } else {
                echo '<table id="table" align=center border=1>';
		$state = $_GET["state"];
		$sql = "SELECT * FROM client where State = '".$state."'";
                mysql_select_db("abelr", $con);
                $result = mysql_query($sql);
                $xsl = new DOMDocument;
		$xsl->load("Table.xsl");
		$proc = new XSLTProcessor();
		$proc->importStyleSheet($xsl);
		$dom = new DOMDocument('1.0', 'utf-8');
		$clients = $dom->createElement("clients");
		$dom->appendChild($clients);
		while($r = mysql_fetch_array($result)){
                	$tr = $dom->createElement("client");
			$clients->appendChild($tr);
			$td = $dom->createElement("firstName", $r['GivenName']);
			$tr->appendChild($td);
			$td = $dom->createElement("lastName", $r['SurName']);
			$tr->appendChild($td);
			$td = $dom->createElement("address", $r['StreetAddress']);
			$tr->appendChild($td);
			$td = $dom->createElement("phoneNumber", $r['PhoneNumber']);
			$tr->appendChild($td);
                }
        	mysql_close($con);
   		echo $proc->transformToXML($dom);
	}
?>
