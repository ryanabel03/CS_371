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
				$fileLines = file('http://cis.gvsu.edu/~abelr/Lab7/data.txt');
                                mysql_select_db("abelr", $con);
                                $sql = "CREATE TABLE client(P_Id int AUTO_INCREMENT, 
                                                GivenName varchar(200),
                                                SurName varchar(200),
                                                StreetAddress varchar(200),
						City varchar(40),
						State varchar(2),
						Zipcode int,
						EmailAddress varchar(200),
						PhoneNumber varchar(20),
                                                PRIMARY KEY(P_Id))";
                                $result = mysql_query($sql,$con);
                        }
                        mysql_close($con);
                ?>
        </body>
<html>
