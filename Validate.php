<?php

if(isset($_POST['send']))

{

$name=$_POST['sender_name'];

$mail=$_POST['sender_mail'];

$recmail=$_POST['reci_mail'];

$sub=$_POST['subject'];

$msg=$_POST['message'];

if(mail($recmail, $sub, $msg, $mail))

{ 

echo 'Your mail has been sent successfully.';

} 

else

echo 'Unable to send email. Please try again.';

}

}

?>
