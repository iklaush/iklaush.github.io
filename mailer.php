<?php 

session_start();
if(isset($_POST['submit'])) {
$youremail = 'kushal.pnchl@gmail.com';
$fromsubject = 'http://www.kushalpanchal.me';
$fname = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['text']; 
	$to = $youremail; 
	$mailsubject = 'Message recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'
	 E-mail: '.$mail.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you fo your feedback. I will contact you shortly if needed.<br/>Go to <a href='/index.html'>Home Page</a>"; 
								mail($to, 'Mail', $body);
 } else { 
echo "You must write a message. </br> Please go to <a href='/mailer.php'>Contact Page</a>"; 
}
?> 