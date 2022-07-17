<?php
include("db.php");
include("upload.php");
if(!isset($_SESSION['loggedin'])){
    header("location:login.php");
  }
  
  $sql="SELECT * from users WHERE email='{$_SESSION['email']}'";
  $result=mysqli_query($conn,$sql) or die("data retrieval error");
  $row = mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
    $name=$_POST['updatename'];
    $email=$_POST['updateemail'];
    $dob=$_POST['updatedob'];
    $address=$_POST['updateaddress'];
    $number=$_POST['updatenumber'];
    $status=$_POST['updatestatus'];
    $occupation=$_POST['updateoccupation'];
$query="UPDATE users SET fullname='$name',email='$email',dob='$dob',houseaddress='$address',phonenumber='$number',maritalstatus='$status',occupation='$occupation'  WHERE email='{$_SESSION['email']}'";
$hxn=mysqli_query($conn,$query);
if($hxn){
    echo '<script type="text/javascript">alert("Data Updated Successfully")</script>';
    $msg="data uploaded successfully";

}else{ echo '<script type="text/javascript">alert("Data Not Updated Successfully")</script>';

}
}
$spql="SELECT * from users WHERE email='{$_SESSION['email']}'";
  $rasult=mysqli_query($conn,$spql) or die("data retrieval error");
  $pow = mysqli_fetch_assoc($rasult);

$oldp=$pow['password'];

if(isset($_POST['changepassword'])){
    $currentpassword=$_POST['currentPassword'];
$en=hash('md5',$currentpassword);
$newp=$_POST['newPassword'];
$confirmp=$_POST['confirmPassword'];
    if($newp==$confirmp && $oldp==$en){
        $aaa=hash('md5',$newp);
        $hql="UPDATE users SET password='$aaa' WHERE email='{$_SESSION['email']}'";
        if(mysqli_query($conn,$hql)){
            echo '<script type="text/javascript">alert("Password Updated Successfully")</script>';
        }else{
            echo '<script type="text/javascript">alert("Database connection error")</script>';
        }
    }
    else{
        echo '<script type="text/javascript">alert("Password Not Equal")</script>';
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

    <title>Profile</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="img/logo.jpg" rel="icon">
  <link href="img/logo.jpg" rel="apple-touch-icon">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
    <i class="bi bi-bank"></i>
    GST
    </div>
    <div class="sidebar-brand-text mx-3"></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="bi bi-house-door-fill"></i>
        <span>Portfolio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Finance
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="investment.php">
        <i class="bi bi-download"></i>
        <span>Deposit/Invest</span>
    </a>
    
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="withdrawal.php">
        <i class="bi bi-upload"></i>
        <span>Withdraw</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="transaction.php">
    <i class="bi bi-hourglass-split"></i>
        <span>Transactions</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Account
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="profile.php">
    <i class="bi bi-person-fill"></i>
        <span>Profile</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="referral.php">
    <i class="bi bi-link-45deg"></i>
        <span>Referrals</span>
    </a>
</li>
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        
        

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>
            <h5 style="color:black;margin-top:17px;"><b><?php echo " Hi, ".$row['fullname'];   ?> </b></h5>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="profile.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    
                   
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800" style="color:black;margin-bottom:20px;"><b>User Profile</b></h1>
                    <hr>
                    <div style="background:white;padding:20px 20px 20px 20px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="profile.php" method="post" enctype="multipart/form-data">
                                    <div class="text-center">
<img src="images/<?php echo $row['profilepicture'];?>" class="img-thumbnail" width="200" style="border-radius:30%;">
</div>
<br>
                                <div class="form-group">
                                    <label for="userimage">Profile Picture</label>
                                    <?php 
                                    if(!empty($msg))?>
                                    <p style="display:none;"><?php echo $msg;?></p>   
<input type="file" id="userimage" name="userimage" class="form-control" >
</div>
<br>
<div class="form-group">
<label for="updatename">Full Name</label>
<input type="text"  name="updatename" class="form-control" value="<?php echo $row['fullname'];?>">
</div>
<br>
<div class="form-group">
<label for="updateemail">Email Address</label>
<input type="email"  name="updateemail" class="form-control" value="<?php echo $row['email'];?>">
</div>
<br>
<div class="form-group">
<label for="updatedob">Date Of Birth</label>
<input type="date"  name="updatedob" class="form-control" value="<?php echo $row['dob'];?>">
</div>
<br>
<div class="form-group">
<label for="updateaddress">House Address</label>
<input type="text"  name="updateaddress" class="form-control" value="<?php echo $row['houseaddress'];?>">
</div>
<br>
<div class="form-group">
<label for="updatenumber">Phone Number</label>
<input type="tel"  name="updatenumber" class="form-control" value="<?php echo $row['phonenumber'];?>">
</div>
<br>
<div class="form-group">
<label for="updatestatus">Marital Status</label>
<input type="text"  name="updatestatus" class="form-control" value="<?php echo $row['maritalstatus'];?>">
</div>
<br>
<div class="form-group">
<label for="updateoccupation">Occupation</label>
<input type="text"  name="updateoccupation" class="form-control" value="<?php echo $row['occupation'];?>">
</div>
<br>

<div class="form-group">
<input type="submit"  name="submit" class="btn btn-info" value="Update">
</div>
</form>
<hr>

<br>
<br>
<form method="post" name="frmChange" action="" >

<div class="form-group">
<label for="currentPassword">Current Password</label>
<input type="password"  name="currentPassword" id="currentPassword" class="form-control" required>
</div>
<div class="form-group">
                                    
                                            <input style="margin-right:6px;color:white;" type="checkbox" onclick="myFuncti()">Show Password</input>
                                            <script>
function myFuncti() {
  var x = document.getElementById("currentPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                        </div>
<div class="form-group">
<label for="newPassword">New Password</label>
<input type="password"  name="newPassword" id="newPassword" class="form-control" required>
</div>
<div class="form-group">
                                    
                                            <input style="margin-right:6px;color:white;" type="checkbox" onclick="myFunctio()">Show Password</input>
                                            <script>
function myFunctio() {
  var x = document.getElementById("newPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                        </div>
<div class="form-group">
<label for="confirmp">Confirm New Password</label>
<input type="password"  name="confirmPassword" id="confirmp" class="form-control" required>
</div>
<div class="form-group">
                                    
                                            <input style="margin-right:6px;color:white;" type="checkbox" onclick="myFunction()">Show Password</input>
                                            <script>
function myFunction() {
  var x = document.getElementById("confirmp");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                        </div>
<div class="form-group">
<input type="submit"  name="changepassword" class="btn btn-info" value="Change Password">
</div>
</form>

                            </div>
                        </div>
                    </div>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; GST 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to Log out.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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