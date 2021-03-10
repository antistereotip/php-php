<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = addslashes(trim($_POST['feedback']));

//staticke informacije - default email adresa
$toadress = 'milutingavrilovic@gmail.com';


// kod ispod trazi odredjene kljucne reci, a zatim prosledjuje e poruku na odgovarajucu adresu
if (strstr($feedback, 'shop')) 
	$toadress="retail@examle.com";
else if (strstr($feedback, 'delivery'))
	$toadress = "fulfilment@example.com";
else if (strstr($feedback, 'bill'))
	$toadress = "account@example.com";

/// nije mi jasno ovo, vraticu se kasnije na to, ovo i eregi
//if (!preg_match('^[a-aA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$^', $email)) {
	//echo "<p>This is not valid email adress. Please return to the previous page and try again</p>";
	//exit;
//} 
//$toadress = 'milutingavrilovic@gmail.com';
//if (preg_match ("shop|customer service|retail", $feedback)) {
//	$toadress = "retail@example.com";
//} else if (preg_match ("deliver.|fulfil", $feedback)) {
//	$toadress = "fulfillment@example.com";
//}	else if (preg_match ("bill|account", $feedback)) {
//	$toadress = "accounts@example.com";
//} else if (preg_match ("bigcustomer\.com", $feedback)) {
//	$toadress = "bob@example.com";
//}

$subject ="Feedback from site";
$mailcontent = "Customer name: ".$name."\n".
				"Customer email: ".$email."\n".
				"Your mail was sent to email: ".$toadress."\n".
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