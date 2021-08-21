<?php
$server = "localhost";
$username = "pmauser";
$password = "beshel";
$dbname = "hng";

$conn = mysqli_connect($server,$username.$password,$dbname);
if(isset($_GET['submit'])){
  if(!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['message']))
  $name = $_GET["name"];
  $email = $_GET["email"];
  $message = $_GET["message"];
  $query = "insert into form(name,email,message) values(('$name','$email','$message')";
  $run = mysqli_query($conn,$query) or die(mysqli_error());
    if ($run) {
      echo "form submitted";
    }
    else {
      "form not submitted"
    }
}
else {
  echo "all fields required";
}
 ?>
