<?php 
//Connect to mySQL db
$host = 'localhost';
$db = 'glipple';
$username = 'newsletter';
$password = 'HC4LnNRNVTXHXRRa';

//Get current users IP address from severl possible locations
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//Only connect to db if email.php is POSTED
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
	//Is $_GET set and a valid email?
	if (isset($_GET["e"]) && filter_var(json_decode($_GET["e"])->email, FILTER_VALIDATE_EMAIL))
	{
		try {
			//Connect to db and pass info
			$DBH = new PDO("mysql:host=$host;dbname=$db", $username, $password);

			$STH = $DBH->prepare("INSERT INTO emails (email, IP) VALUES (:email, :IP)");
			$STH->bindParam(':email', json_decode($_GET["e"])->email);
			$STH->bindParam(':IP', $ip);
			
			$STH->execute();
			
			//true if db was written to
			$result = true;
		} catch(PDOException $e) {
			//false if there was an error
			$result = false;
			//echo 'ERROR: ' . $e->getMessage();
		}
	} else {
		$result = false;
	}
	//echo the result
	echo $result;
}
?>