<?php
session_start();
require(__DIR__ . "/../vendor/autoload.php");
$okay = true;

$first_name = '';
$last_name = '';
$username = '';
$verify_username = '';
$password = '';
$verify_password = '';

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$username = $_REQUEST['username'];
$verify_username = $_REQUEST['verify_username'];
$password = $_REQUEST['password'];
$verify_password = $_REQUEST['verify_password'];

if(($first_name =='')) || ($last_name ='') || ($username ==''))
|| ($verify_username =='')) || ($password =='')) || ($verify_password =='')){
  $okay = false;
}
if(strlen($firstname)<3){
$okay = false;
}
if(strlen($lastname)<3){
$okay = false;
}

if($username != $verify_username){
$okay = false;
}

if($password != $verify_password){
$okay = false;
}

if(okay == false){
  $msg="You missed some of the form data. Please reenter and try again";
  header("Location:/register.php");
  exit();
}

echo "First name: " . $first_name . "<br>";
echo "Last name: " . $last_name . "<br>";
echo "Username: " . $username . "<br>";
echo "Verify username: " . $verify_username . "<br>";
echo "Password: " . $password . "<br>";
echo "Verify password: " . $verify_password . "<br>";

echo "<br><br>";
foreach ($_REQUEST as $name => $value) {
  echo $name . " = " . $value . "<br>";# code...
}




 ?>
