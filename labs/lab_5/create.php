<html>
<head>
  <SCRIPT LANGUAGE="JavaScript" SRC="script.js"></SCRIPT>
  <LINK href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
    $con = mysql_connect("cis.gvsu.edu","abelr","abelr1500");

    if (!$con){
      echo '<p>You had trouble connecting to the database</p>';
    } else {
      echo '<p>Successful Connection</p>';

      mysql_select_db("abelr", $con);
      $sql = "CREATE TABLE Friends(P_Id int AUTO_INCREMENT,
        FirstName varchar(15),
        LastName varchar(15),
        PhoneNumber varchar(15),
        Age int,
        PRIMARY KEY(P_Id))";

      $result = mysql_query($sql,$con);

      if ($result){
        echo 'The Table was created successfully';
      } else {
        echo mysql_error();
      }
    }
    mysql_close($con);
    ?>
    </body>
    <html>

