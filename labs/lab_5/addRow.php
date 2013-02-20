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
        mysql_select_db("abelr", $con);

        $lname = $_POST['lname'];
                          $fname = $_POST['fname'];
        $pnum = $_POST['pnum'];
                          $age = $_POST['age'];
        $sqlInsert =
        "INSERT into Friends (FirstName, LastName, PhoneNumber, Age)
        values ('".$fname."', '".$lname."', '".$pnum."', '".$age."')";

        $result = mysql_query($sqlInsert,$con);

        if ($result){
          echo 'The row was inserted successfully';
        } else {
          echo mysql_error();
        }

      }
      mysql_close($con);
    ?>
  </body>
<html>
