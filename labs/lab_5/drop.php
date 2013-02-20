<html>
<head>
  <SCRIPT LANGUAGE="JavaScript" SRC="script.js"></SCRIPT>
  <LINK href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
    $con = mysql_connect("cis.gvsu.edu","abelr","abelr1500");
    mysql_select_db("abelr", $con);
    $sql = 'DROP TABLE Friends';

    $result = mysql_query($sql,$con);

    if ($result){
      echo 'The Table was dropped successfully';
    } else {
      echo mysql_error();
    }

    mysql_close($con);
    ?>
  </body>
  <html>
