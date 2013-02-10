<html>
  <head>
  </head>
  <body>
    <?php
      function buildTable($aBlood, $bBlood, $abBlood, $oBlood, $hasVirus) {
        echo "<table>";
        echo "<tr>";
        echo "<td></td><td>A</td><td>B</td><td>AB</td><td>O</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$hasVirus</td><td>$aBlood</td><td>$bBlood</td><td>$abBlood</td><td>$oBlood</td>";
        echo "</tr>";
        echo "</table>";
      }

      $hasNoVirusCount = 0;
      $hasABlood = 0;
      $hasBBlood = 0;
      $hasABBlood = 0;
      $hasOBlood = 0;
      $hasVirusCount = 0;
      $hasABloodVirus = 0;
      $hasABBloodVirus = 0;
      $hasOBloodVirus = 0;

      $lines = file("patients.txt");
      foreach($lines as $aLine) {
	$line = explode(",", $aLine);
        $weight = $line[3];
        $gender = trim($line[1]);

	if(strstr($line[2], "AB")) {
	  $bloodType = "AB";
        } else {
          $bloodType = substr($line[2], 0, 1);
	}

        $hasVirus = trim($line[4]);
	$minWeight = $_POST["minWeight"];
	$maxWeight = $_POST["maxWeight"];
        if($weight >= $_POST["minWeight"] && $weight <= $_POST["maxWeight"] && $gender == $_POST["sex"]) {
          if(strcmp($hasVirus, "N") == 0) {
            if($bloodType == "A") {
              $hasABlood++;
            } elseif ($bloodType == "B") {
              $hasBBlood++;
            } elseif ($bloodType == "AB") {
              $hasABBlood++;
            } elseif ($bloodType == "O") {
              $hasOBlood++;
            }
          } else {
            if(strcmp($hasVirus, "Y") == 0) {
              if($bloodType == "A") {
                $hasABloodVirus++;
              } elseif ($bloodType == "B") {
                $hasBBloodVirus++;
              } elseif ($bloodType == "AB") {
                $hasABBloodVirus++;
              } elseif ($bloodType == "O") {
                $hasOBloodVirus++;
              }
            }
          }
        }
      }
    buildTable($hasABlood, $hasBBlood, $hasABBlood, $hasOBlood, "N");
    buildTable($hasABloodVirus, $hasBBloodVirus, $hasABBloodVirus, $hasOBloodVirus, "Y");
    ?>
  </body>
</html>
