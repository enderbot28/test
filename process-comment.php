<!DOCTYPE html>
<html>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$to = 'harishadi28@gmail.com';
$subject = 'New comment on your website';
$message = 'Name: ' . $name . "\r\n" .
           'Email: ' . $email . "\r\n" .
           'Comment: ' . $comment;

$headers = 'From: ' . $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
  // Return a success message
  echo 'Your comment was submitted successfully!';
} else {
  // Return an error message
  echo 'Sorry, there was an error submitting your comment. Please try again later.';
}
?>
</body>
</html>