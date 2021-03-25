
<?php
$ime = $_POST["name"];
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email address '$email' is considered valid.\n";
} else {
	echo "Email address '$email' is NOT considered valid.\n";
	return 0;
}
$komentar = $_POST["comment"];
$podaci = array($ime, $email, $komentar);
file_put_contents('../view/node7.txt', implode(' || ',$podaci)."\n",FILE_APPEND | LOCK_EX);
?>