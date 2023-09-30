<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Richard- admin login </title>

  <!-- vendor css -->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">


  <!-- Starlight CSS -->
  <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">panda <span class="tx-info tx-normal">admin</span></div>
      <div class="tx-center mg-b-60">Professional Admin Template Design</div>

      <?php if (isset($_SESSION['success_msg'])) : ?>
        <div class="alert alert-success">
          <?= $_SESSION['success_msg'] ?>
        </div>
      <?php endif; ?>
      <?php if (isset($_SESSION['login_error'])) : ?>
        <div class="alert alert-danger">
          <?= $_SESSION['login_error'] ?>
        </div>
      <?php endif; ?>
      <form action="login_post.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username" value="<?= (isset($_SESSION['email_address'])) ? $_SESSION['email_address'] : '' ?>" name="email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" name="password">
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>
      <div class="mg-t-60 tx-center">Not yet a member? <a href="register.php" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="lib/jquery/jquery.js"></script>
  <script src="lib/popper.js/popper.js"></script>
  <script src="lib/bootstrap/bootstrap.js"></script>

</body>

</html>
<?php
session_unset();
?>