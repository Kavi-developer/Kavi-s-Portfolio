 <?php

  // $receiving_email_address = 'kaviprofession08@gmail.com.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject']; 

 //  Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'smtp.gmail.com',
  //   'username' => 'kaviprofession08@gmail.com',
  //   'password' => 'Kavi@123',
  //   'port' => '587'
  // );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();


  // Include the PHPMailer library.
require 'PHPMailer/PHPMailerAutoload.php';

// Create a new PHPMailer instance.
$mail = new PHPMailer();

// Set the SMTP server information.
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'kaviprofession08@mail.com';
$mail->Password = 'Kavi@123';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

// Set the sender and recipient information.
// $mail->From = 'sender@example.com';
// $mail->FromName = 'Sender Name';
// $mail->Subject = 'Contact Form Submission';
// $mail->AddAddress('recipient@example.com');

// Get the data from the contact form.
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Add the contact form data to the email body.
$mail->Body = <<<EOF
From: $name
Email: $email
Subject: $subject
Message: $message
EOF;

// Send the email.
if ($mail->Send()) {
    echo "Email sent successfully!";
} else {
    echo "There was an error sending the email: " . $mail->ErrorInfo;
}
?>
