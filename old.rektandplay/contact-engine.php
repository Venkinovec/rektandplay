<?php

$EmailFrom = "contact-form@recandplay.cz";
$EmailTo = "thegamessk@azet.sk, contactus@recandplay.cz, centriklp@gmail.com";
$Name = Trim(stripslashes($_POST['Name'])); 
$Predmet = Trim(stripslashes($_POST['Predmet'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=404.php\">";
  exit;
}

// prepare email body text
$Subject = "Rec and Play formulář | ".$Predmet."";
$Body = "";
$Body .= "Odesilatel: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Zpráva: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-successful.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=404.php\">";
}
?>