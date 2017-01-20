<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for registering for Parakram. As early as possible  we will contact you '
	);

    $name = @trim(stripslashes($_POST['college'])); 
    $team_members = @trim(stripslashes($_POST['team_members'])); 
    $sport = @trim(stripslashes($_POST['sport'])); 
    $date = @trim(stripslashes($_POST['date'])); 
    $number = @trim(stripslashes($_POST['number'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = "Registration form for Parakram";
    $email_from = $email;
    $email_to = 'kunaltyagi12@gmail.com';//replace with your email

    $body = 'Name of college: ' . $name . "\n\n" . 'No. of Members: ' . $team_members . "\n\n" . 'Name of Sport: ' . $sport . "\n\n" .
     'Date of Reporting: ' . $date."\n\n" . 'Contact No: ' . $number . "\n\n" . 'Email: ' . $email;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
    ?>
 