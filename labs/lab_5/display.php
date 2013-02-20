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
      echo '<p>Connection was created successfully</p>';

      echo '<table>';
      mysql_select_db("abelr", $con);
      $result = mysql_query("SELECT * FROM Friends");
      while($r = mysql_fetch_array($result)){
        echo '<tr><td>'.$r['FirstName'].'</td>';
        echo '<td>'.$r['LastName'].'</td>';
        echo '<td>'.$r['PhoneNumber'].'</td>';
        echo '<td>'.$r['Age'].'</td></tr>';
      }
      echo '</table>';
    }
    mysql_close($con);
    ?>
  </body>
<html>


