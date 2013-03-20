<?php
	$con = mysql_connect("cis.gvsu.edu","abelr","abelr1500");
        if (!$con){
        	echo '<p>Error connecting to db</p>';
        } else {
                mysql_select_db("abelr", $con);
                $result = mysql_query("SELECT distinct(State) FROM client order by State");
                $stateString = "";
		$firstTime = true;
		While($r = mysql_fetch_array($result)){
			if ($firstTime){ 
				$firstTime = false;
				$stateString = $stateString.$r['State']; 
			} else {
				$stateString = $stateString.','.$r['State']; 		
			}
		}	
       }
       mysql_close($con);
       echo $stateString;
?>
