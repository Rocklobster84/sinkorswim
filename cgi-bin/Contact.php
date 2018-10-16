<?php

$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$streetAddress = $_POST['streetAddress'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
$Contact = $_POST['Contact'];
$Referral = $_POST['Referral'];
$Project = $_POST['Project'];
$Budget = $_POST['Budget'];
$Specifications = $_POST['Specifications'];
$Deadline = $_POST['Deadline'];
$InHome = $_POST['InHome'];
$Delivery = $_POST['Delivery'];
$comments = $_POST['comments'];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";


// More headers
$headers .= 'From: <noreply@sinkorswimfortworth.com>' . "\r\n";

$to = "ben@sinkorswimfortworth.com";

$subject =  "Contact form from "  . strip_tags($Name) . "\r\n";

$message = '<html><head><style> body {font-family: Verdana, sans-serif; font-size:10pt;} h2 {color:#005dab; font-size:14pt;} h3 {color:#005dab; font-size:12pt;} p {margin: 0em;}</style></head><body>';

$message .= "<h3>Contact Information</h3>" . "\r\n";
$message .= "<p><strong>Name:</strong>&nbsp; 	  " . strip_tags($Name) . "</p>\r\n";
$message .= "<p><strong>Phone:</strong>&nbsp; 	" . strip_tags($Phone) . "</p>\r\n";
$message .= "<p><strong>Email:</strong>&nbsp; 	" . strip_tags($Email) . "</p>\r\n";
$message .= "<p><strong>Billing Address:</strong>&nbsp;	" . strip_tags($streetAddress) . ", " . strip_tags($City) . ", " . strip_tags($State) . ", " . strip_tags($Zip) . "</p>\r\n";


$message .= "<h3>Details</h3>" . "\r\n";
$message .= "<p><strong>Preferred Contact Method:</strong>&nbsp;	" . strip_tags($Contact) . "</p>\r\n";
$message .= "<p><strong>How did you hear about Sink or Swim Designs? :</strong>&nbsp;	" . strip_tags($Referral) . "</p>\r\n";
$message .= "<p><strong>Please describe the project/piece you are interested in:</strong>&nbsp;	" . strip_tags($Project) . "</p>\r\n";
$message .= "<p><strong>What is your budget? This helps me choose what materials will be best to use for your project. If you already have a certain material in mind (specific type of wood, reclaimed wood, metal, etc) let me know:</strong>&nbsp;" . strip_tags($Budget) . "</p>\r\n";
$message .= "<p><strong>List specifications required - height, width, length, color: stain/paint/natural:</strong>&nbsp;	" . strip_tags($Specifications) . "</p>\r\n";
$message .= "<p><strong>Do you have a specific completion deadline? :</strong>&nbsp;	" . strip_tags($Deadline) . "</p>\r\n";
$message .= "<p><strong>I offer in-home consultation for $75, which will be applied to the project price. Non-refundable if project is not purchased. Would you like to schedule a consultation?:</strong>&nbsp;	" . strip_tags($InHome) . "</p>\r\n";
$message .= "<p><strong>Free delivery is included on any item within 15 miles of 76012. Further distances from $5 and up. What is your delivery address?:</strong>&nbsp;	" . strip_tags($Delivery) . "</p>\r\n";


$message .= "<h3>Their Comments</h3>" . "\r\n";
$message .= "<p>" . strip_tags($comments) . "</p>\r\n";

$message .= "</body></html>";

header("Location: http://www.sinkorswimfortworth.com/confirmation/index.html" );

mail($to,$subject,$message,$headers);
?>
