<?php
include("db.php");

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) { 
    $target_dir = "images/";
$profileimagename=time()."_".basename($_FILES["userimage"]["name"]);
$target_file = $target_dir.$profileimagename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (file_exists($target_file)) {
    $msg="file exists already";
    $uploadOk = 0;
  }
  if ($_FILES["userimage"]["size"] > 1700000) {
    $msg="image is too large";
    $uploadOk = 0;
  }
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $msg="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}if ($uploadOk == 0) {
    $msg="your image was not uploaded"; 
     // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file)) {
      $sql="SELECT * FROM users WHERE email='{$_SESSION['email']}'";
      $hql="UPDATE users SET profilepicture='$profileimagename' WHERE email='{$_SESSION['email']}'";
      if(mysqli_query($conn,$hql)){
        $msg="Your image has been uploaded successufully";
      }else{
        $msg="failed to upload image to database";
      }
    } else {
      $msg= "Sorry, there was an error uploading your file.";
    }
  }
}



?>