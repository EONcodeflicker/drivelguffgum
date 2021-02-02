
<html>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] != 'POST'){
      $me = $_SERVER['PHP_SELF'];


mail($recipient, $email,$name, $subject, $your_message);

if (isset($_POST["submit"])) {
$recipient = "topgun1892@live.com";
$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$your_message = $_POST['your_message'];

echo $email;
echo $name;
echo $subject;
echo $message;



?>


<br>
<br>
<center>
<p style="background-color:white;font-family:impact;font-size:33px;color:#AABFFF;">
Your message was successfully sent!<br />
<br />

Thank you for contacting us!
</p>
</center>
</body>
</html>
