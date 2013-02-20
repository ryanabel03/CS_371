<html>
  <head>
  </head>
  <body>
    <?php
      session_start();
      $name = $_POST['firstName'];
      $_SESSION['name'] = $name;
      echo "<p> Thank you $name </p>";
    ?>

    <a href="job.php">Job</a>
    <a href="intern.php">Intern</a>
  </body>
</html>
