<?php
  require_once('connection.php');
  session_start();
  if (isset($_POST['Login'])) {
    if (empty($_POST['UName']) || empty($_POST['Password'])) {
      header("Location:index.php?Empty= Please Fill in the Blacks");
    }else {
      $sql="SELECT * FROM jrdw_login WHERE uname='{$_POST['UName']}' AND pass=password('{$_POST['Password']}')";
      $result=mysqli_query($conn, $sql);
      if($row = mysqli_fetch_assoc($result)){
        $_SESSION['User']=$_POST['UName'];
        $_SESSION['class']=$row['class'];
        header("Location:welcome.php");
      }else{
        header("Location:index.php?Invalid= Please Enter Correct User Name and Password ");
      }
    }
    echo 'Working Now';
  }else{
    echo 'Not Working New Guys';
    header("Location:index.php");
  }

?>
