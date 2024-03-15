<?php

    $name = $_POST["fname"];
    $surname = $_POST["surname"];
    $telephone = $_POST["tel"];
    $email = $_POST["email"];
    $propertyUse = $_POST["puse"];
    $productsProvided = $_POST["products_provided"];
    $propertyNumber = $_POST["property_num"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $propertyType = $_POST["property_type"];
    $bathrooms = $_POST["Bathrooms"];
    $bedrooms = $_POST["Bedrooms"];
    $pictures = $_POST["pictures"];
    $cleanType = $_POST["cleantype"];
    $oven = $_POST["oven"];
    $laundry = $_POST["laundry"];
    $prefDate = $_POST["prefdate"];
    $prefDate2time = $_POST["prefdate2time"];
    $prefDate2day = $_POST["prefdate2day"];
    $comments = $_POST["comments"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	//$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'black1984notts@googlemail.com';				
	$mail->Password = 'tjie yatf txbo nepp';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom($email, $name);		
	$mail->addAddress('black1984@hotmail.co.uk');
	//$mail->addAddress('recipient2@example.com', 'Name');

    //for ($i=0; $i < count($_FILES['pictures']['temp_name']) ; $i++) {
        //}
        
        $mail->isHTML(true);								
        $mail->Subject = "**QUOTE** for $name $surname at $address";
        $mail->Body = "<h1>please provide a quote for:</h1>
        Name: $name <br>
        Surname: $surname<br>
        Telephone: $telephone<br>
        Email: $email<br>
        Property use: $propertyUse<br>
        Products provided: $productsProvided<br>
        Property number: $propertyNumber<br>
        Address: $address<br>
        City: $city<br>
        Postcode: $postcode<br>
        Property type: $propertyType<br>
        Bathrooms: $bathrooms<br>
        Bedrooms: $bedrooms<br>
        Pictures: $pictures<br>
        Clean type: $cleanType<br>
        Oven clean: $oven<br>
        Laundry: $laundry<br>
        Preferred date: $prefDate<br>
        Best time to book: $prefDate2time<br>
        Best days to book: $prefDate2day<br>
        Additional information: $comments";
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
