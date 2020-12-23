<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('366996391548-k7g0amjuh9vvk72gqrrfkq7oelq79jlu.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('iuIQbZpm2ANLSiasvRAYrWY5');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8080/Sliding-Sign-In-Sign-Up-Form-master/googleapi/googleapi.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>