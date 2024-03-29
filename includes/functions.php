<?php
function email_exists($email) 
{
	global $conn;

	$sql = "SELECT id FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	if($result->num_rows == 1 ) {
		return true;
	} else {
		return false;
	}
}

function get_id($email) {
	global $conn;

	$sql = "SELECT id FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["id"];
}

function get_avatar($email) {
	global $conn;

	$sql = "SELECT avatar FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["avatar"];
}

function get_username($email) {
	global $conn;

	$sql = "SELECT username FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["username"];
}

function get_number($email) {
	global $conn;

	$sql = "SELECT mobilenumber FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["mobilenumber"];
}

function get_name($email) {
	global $conn;

	$sql = "SELECT first_name FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["first_name"];
}

function get_lastname($email) {
	global $conn;

	$sql = "SELECT last_name FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["last_name"];
}

function get_dates($email) {
	global $conn;

	$sql = "SELECT date_added FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["date_added"];
}

function get_email($email) {
	global $conn;

	$sql = "SELECT email FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["email"];
}

function get_user($email) {
	global $conn;

	$sql = "SELECT username FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["username"];
}

function get_password($email) {
	global $conn;

	$sql = "SELECT password FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["password"];
}

function get_select($email) {
	global $conn;

	$sql = "SELECT selection FROM member WHERE email = '$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["selection"];
}

function set_message($message) 
{
	if(!empty($message)){
		$_SESSION['message'] = $message;
	}else {
		$message = "";
	}
}

function display_message()
{
	if(isset($_SESSION['message'])) {
		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}
}

function redirect($location){
	return header("Location: {$location}");
}

function validation_errors($error_message) 
{
$error_message = <<<DELIMITER

<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong>Warning!</strong> $error_message
 </div>
DELIMITER;

set_message($error_message);
}

function logged_in(){
	if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
		return true;
	} else {
		return false;
	}
}

?>