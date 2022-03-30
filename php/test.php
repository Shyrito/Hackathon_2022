<?php



include('../inc/db_CANDIDATE.inc.php');

use USERS\Candidate;
$email = "jadotjean@gmail.com";
$test=Candidate::getAllMail($email);
foreach ($test as $key) {
  echo "<p>$key->email</p>";
}
?>



<?php



include('../inc/db_JOB_OFFER.inc.php');

use Job\Jobbb;
$id = 1;
$test=Jobbb::getAllJob($id);
foreach ($test as $key) {
  echo "<p>$key->title</p>";
}
?>

<?php
/*
public static function email($email,$object,$txt){
  require '../PHPMailer/src/PHPMailer.php';
  require '../PHPMailer/src/Exception.php';




$mail = new PHPMailer(true);
try {
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('Facetube@helmo.be');
    $mail->addAddress($email);  //placez VOTRE adresse courriel
    $mail->addReplyTo('no-reply@helmo.be');
    $mail->isHTML(false);
    $mail->Subject = $object;
    $mail->Body = $txt;
    $mail->send();
    echo "Courrier envoyé";
} catch(Exception $e){
    return 'Erreur survenue lors de l\'envoi de l\'email<br>'. $mail->ErrorInfo;
}
}
*/
?>
