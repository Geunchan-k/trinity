<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome</h1>
    <p>This is Geunchan's World<?=$_SESSION['class']?></p>

    <a href="logout.php?logout">Logout</a>

  </body>
</html>
