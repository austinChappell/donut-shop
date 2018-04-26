<!DOCTYPE html>
<html>
  <head>
    <title>The Donut House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">
  </head>
  <body>
    <div class='content1'>

<?php

$captcha = $_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdwhCQUAAAAAJh13ER3OlZHXXbZo75ymj7grb8-&response=".$captcha."&remoteip=66.147.242.96");
$sender = 'Austin.W.Chappell@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = $_POST['date'];
$formcontent="From: $name \n Email: $email \n Phone: $phone \n Message: $message \n Date Needed: $date";
$recipient = "jbgecko5150@yahoo.com, Burke929ruthie@gmail.com, kara.johnson809@gmail.com, joy.rebekah@yahoo.com";
$subject = "Order Form";
$mailheader = "From: $sender \r\n";
if(!$captcha) {
  echo "<h3>Please verify that you are not a robot.</h3>";
  echo "<a href='index.html'><button class='submit-button'>Go Back</button></a>";
} else {
  if($response.success == true) {
    echo "<h3>Thank you for your order! We will be in contact with you shortly.</h3>";
    echo "<a href='index.html'><button class='submit-button'>Go Back</button></a>";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  } else if($response.success == false) {
    echo "<h3>Oops! Something went wrong. Please try again.</h3>";
  };
};

?>

    </div>
  </body>
</html>
