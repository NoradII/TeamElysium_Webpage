<meta charset="utf-8">
<?php
/**
 * @author Ravi Tamada
 * @link http://www.androidhive.info/2012/01/android-login-and-registration-with-php-mysql-and-sqlite/ Complete tutorial
 */
//header("Content-Type:application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
//header("Location: http://igrus.mireene.com/Teamelysium/contact.html");

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'igrus');
define('DB_PASSWORD', 'Dkdlrmfntm123');
define('DB_DATABASE', 'igrus');

if($_POST['name'] != "" && $_POST['message'] != "" && $_POST['email'] != "" && $_POST['subject'] != ""){

	$from = $_POST['email'];
	$subject = $_POST['subject'];
	$name = $_POST['name'];
	$msg = $_POST['message'];
	$msg = $msg."\r\nFrom: ".$name;

	$headers = "From : $from\r\n";
	$headers .= "X-Mailer: PHP ".phpversion()."\r\n"; 
	$headers .= "X-Priority: 1\r\n"; 
	$headers .= "Return-Path: <...>\r\n"; 
	$headers .= "Content-Type: text/html; "; 
	$headers .= "charset=utf-8\r\n"; 

	// send email
	mail("contact@teamelysium.kr", $subject, $msg, $headers);


}else{
	echo '<script type="text/javascript"> alert("내용을 입력해주세요."); 
	window.location.href= "http://igrus.mireene.com/Teamelysium/contact.html";
	</script>';
}

?>