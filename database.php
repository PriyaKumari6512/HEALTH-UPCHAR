
<?php

if (!isset($_SESSION)){
  session_start();
}


$session_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$pages = isset($_GET['page']) ? $_GET['page'] : '';
$function = isset($_GET['function']) ? $_GET['function'] : '';



// $servername = "localhost";
// $username = "root";
// $password = "";
// $database_name = "health_upchar";

// // Create connection
// $link = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if (mysqli_connect_errno()) {
  print_r(mysqli_connect_error());
  echo "connection fail";
  exit();
}


if($function == "logout"){
  session_unset();
  header("Location: http://localhost/my_website/");
  exit();
}
?>