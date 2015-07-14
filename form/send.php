<?
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];

$to = "dramdrum.m@gmail.com";
$subject = "Keni koment të ri nga $q3";
$message= "$q1 $q2 ju la kete koment :\n\nEmri: $q1\n\nMbiemri: $q2\n\nEmail: $q3\n\nTel: $q4\n\nKomenti: $q5";
mail($to,$subject,$message);
header("Location:contact.php");
?>