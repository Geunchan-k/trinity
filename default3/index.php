<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <meta http-equiv="XUA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Login Form in PHP With Session</title>
  </head>
  <body style="background:#CCC;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="card bg-dark mt-5">
            <div class="card-title bg-primary text-white">
              <h3 class="text-center py-3">Login Form in PHP</h3>
            </div>

            <?php
              if($_GET['Empty']==true)
              {
            ?>
              <div class="alert-light text-danger text-center py-3"><?=$_GET['Empty']?></div>
            <?php
              }
            ?>

            <?php
              if($_GET['Invalid']==true)
              {
            ?>
              <div class="alert-light text-danger text-center py-3"><?=$_GET['Invalid']?></div>
            <?php
              }
            ?>

            <div class="card-body">
              <form action="process.php" method="post">
                <input type="text" name="UName" placeholder=" User name" class="form-control">
                <input type="password" name="Password" placeholder=" Password" class="form-control">
                <button class="btn btn-success mt-3 text-center" style="width:100%" name="Login">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



  </body>
</html>
