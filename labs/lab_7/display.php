<html>
        <head>
                <SCRIPT LANGUAGE="JavaScript" SRC="script.js"></SCRIPT>
                <LINK href="style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
                <?php
                        $con = mysql_connect("cis.gvsu.edu","abelr","abelr1500");
                        if (!$con){
                                echo '<p>Error connecting to db</p>';
                        } else {
                                echo '<table align=center border=1>';
                                        mysql_select_db("abelr", $con);
                                        $result = mysql_query("SELECT * FROM client");
                                        while($r = mysql_fetch_array($result)){
                                                echo '<tr><td>'.$r['GivenName'].'</td>';
                                                echo '<td>'.$r['SurName'].'</td>';
                                                echo '<td>'.$r['StreetAddress'].'</td>';
						echo '<td>'.$r['City'].'</td>';
						echo '<td>'.$r['State'].'</td>';
						echo '<td>'.$r['Zipcode'].'</td>';
						echo '<td>'.$r['EmailAddress'].'</td>';
						echo '<td>'.$r['PhoneNumber'].'</td></tr>';
                                        }
                                echo '</table>';
                        }
                        mysql_close($con);
                ?>
        </body>
<html>

