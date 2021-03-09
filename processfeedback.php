<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

//staticke informacije
$toadress = 'milutingavrilovic@gmail.com';

$subject ="Feedback from site";
$mailcontent = "Customer name: ".$name."\n".
				"Customer email: ".$email."\n".
				"Customer comments:  \n".$feedback."\n";

$fromadress = "From: root@high.tech";

//pozivanje funkcije mail()
mail($toadress, $subject, $mailcontent, $fromadress);
?>
<html>
<head>
	<title>Milutin's auto parts - Feedback submited</title>
</head>
<body>
<h1>Feedback submited</h1>
<p>Your feedback has been sent</p>
<p>
<?php 
//$mailcontent = strtoupper($mailcontent); - pretvara slova u velika 
echo nl2br($mailcontent); 
?>
</p>
</body>
</html>