<?php
include("db.php");
if(isset($_POST['email'])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $encrypted_password=hash('md5',$password);
    $sol="SELECT * from users where email='$email' AND password='$encrypted_password' ";
    $result=mysqli_query($conn,$sol) or die("data retrieval error");
    
  

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
       $_SESSION['loggedin']=TRUE;
       $_SESSION['email']=$row['email'];
       $_SESSION['name']=$row['fullname'];
       $_SESSION['balance']=$row['balance'];
       $_SESSION['deposits']=$row['deposits'];
       $_SESSION['profits']=$row['profits'];
       $_SESSION['withdrawals']=$row['withdrawals'];
       $_SESSION['referralcode']=$row['referral'];
       $_SESSION['dob']=$row['dob'];
       $_SESSION['address']=$row['houseaddress'];
       $_SESSION['number']=$row['phonenumber'];
       $_SESSION['activereferral']=$row['activereferral'];
       $_SESSION['referralbonus']=$row['referralbonus'];
       $_SESSION['occupation']=$row['occupation'];
       $_SESSION['status']=$row['maritalstatus'];

header("location:index.php");
       

    }
    else{
        echo "<p style='color:red;text-align:center;'>Invalid Login Credentials</p>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GST - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="img/logo.jpg" rel="icon">
  <link href="img/logo.jpg" rel="apple-touch-icon">

</head>

<body class="bg-gradient-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <img class="img-fluid" src="img/logo.jpg">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." `  required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                    
                                            <input style="margin-right:6px;color:white;" type="checkbox" onclick="myFunction()">Show Password</input>
                                            <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                                            </input> 

                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>