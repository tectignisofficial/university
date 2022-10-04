<?php
include('../forms/configure.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h3><b>AGREERENT</b></h3>
                <h6>Admin Login</h6>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="social-auth-links text-center mt-2 mb-3">
                        <input type="submit" name="login" value="Login" class="btn btn-block btn-primary">
                    </div>
                </form>


                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<?php
session_start();
if(isset($_SESSION['id'])) // If session is not set then redirect to Login Page
{
 header("Location:index.php"); 
}
if(isset($_POST["login"])){
	$email=$_POST["email"];
	$password=$_POST["password"];

	$sql = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND status='1'") ;
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($password,$row['password']);
	

		if($verify==1){
			$_SESSION['email']=$row['email'];
      $_SESSION['name']=$row['name'];
      $_SESSION['id']=$row['id'];
      
      ?>

<script type="text/javascript">
$(document).ready(function() {
    swal({
        title: "Good!",
        text: "Login Sucessfull",
        type: "success",
        icon: "success"
    }).then(function() {
        // Redirect the user
        window.location.href = "index";
    })
});
</script>

<?php 
}
else{
   ?>

<script type="text/javascript">
$(document).ready(function() {
    swal({
        title: "Error",
        text: "Invalid Email or Password",
        type: "error",
        icon: "error"
    }).then(function() {
        // Redirect the user
        window.location.href = "login";
    })
});
</script>

<?php 

}
}else{
echo"<script>
alert('Wrong email'), window.location = 'login.php';
</script>";
}
}
?>

</html>