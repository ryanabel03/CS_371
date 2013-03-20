<html>
        <head>
                <SCRIPT LANGUAGE="JavaScript" SRC="script.js"></SCRIPT>
                <LINK href="style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
                <?php
                        $con = mysql_connect("cis.gvsu.edu","abelr","abelr1500");

                        if (!$con){
                                echo '<p>Error connecting to the db</p>';
                        } else {
                                mysql_select_db("abelr", $con);

                                //Read from a file to populate table
                                $fileLines = file('http://cis.gvsu.edu/~abelr/Lab7/data.txt');
                                $result = null;
                                foreach($fileLines as $line){
                                        $lineContents = explode("\t",$line);
					print_r($lineContents);
                                        $givenName = $lineContents[0];
                                        $surName = $lineContents[1];
                                        $streetAddress = $lineContents[2];
                                        $city = $lineContents[3];
					$state = $lineContents[4];
					$zipCode = $lineContents[5];
					$emailAddress = $lineContents[6];
					$telephoneNumber = $lineContents[7];
                                        $sqlInsert = "INSERT into client (GivenName, SurName, StreetAddress, City, State, Zipcode, EmailAddress, PhoneNumber) values ('".$givenName."', '".$surName."', '".$streetAddress."', '".$city."', '".$state."', '".$zipCode."', '".$emailAddress."', '".$telephoneNumber."')"; 
                                        $result = mysql_query($sqlInsert,$con);
                                }
                        }
                        mysql_close($con);
                ?>
        </body>
<html>

