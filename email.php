<?php 
$host = 'localhost';
$db = 'glipple';
$username = 'newsletter';
$password = 'HC4LnNRNVTXHXRRa';

$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables ========
if (empty($_GET['e']))
  $errors['name'] = 'An email is required';

// return a response ==============

// response if there are errors
if ( ! empty($errors)) {

  // if there are items in our errors array, return those errors
  $data['success'] = false;
  $data['errors']  = $errors;
} else {

  // if there are no errors, return a message
  $data['success'] = true;
  $data['message'] = 'Success!';
}

// return all our data to an AJAX call
echo json_encode($data);

try {
    $DBH = new PDO("mysql:host=$host;dbname=$db", $username, $password);

    $STH = $DBH->prepare("INSERT INTO emails (email) VALUES (:email)");
    $STH->bindParam(':email', $_GET['e']);

    $STH->execute();
    echo "Your email was added to our list!";
} catch(PDOException $e) {
    //echo 'ERROR: ' . $e->getMessage();
    echo "There was an error adding your email to our list!";
}

?>