<html>
<head>
</head>
<body>
  <form name="addRowForm" onsubmit="return verifyAddRowForm()" method="POST" action="addRow.php" align=center>
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Phone Number: <input type="text" name="pnum"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit" value="Add Row">
  </form>

  <form name="createTableForm" onsubmit="return verifyCreateTableForm()" method="POST" action="create.php" align=center>
    <input type="submit" value="Create Table">
  </form>

  <form name="displayTableForm" onsubmit="return verifyDisplayForm()" method="POST" action="display.php" align=center>
    <input type="submit" value="Display Table">
  </form>

  <form name="dropTableForm" onsubmit="return verifyDropForm()" method="POST" action="drop.php" align=center>
    <input type="submit" value="Drop Table">
  </form>

  <form name="populateForm" onsubmit="return verifyPopulateForm()" method="POST" action="populate.php" align=center>
    <input type="submit" value="Populate Table">
  </form>

</body>
</html>
