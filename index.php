<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON  Welcome to Imbokodo get assistance or learn more /n";
  
$response .= "Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  Please select a language \n";
  
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
// Menu for a user who selects '1' from the second menu
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response  = "CON  Please select an option below\n";
$response .= "1. Emergency Alert \n";
$response .= "2. Safe House \n";
$response .= "3. Leaving your abuser \n";
$response .= "4. Document Storage\n";
}
//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
else if ($text == "1*1*1") {
$response .= "This is only for immediate emergency \n";
$response .= "Enter 1 to continue or 0 to cancel \n";
}
else if ($text == "1*1*1*1") {
$response = "Your alert has been recieved";
$response .= "Enter your address below";
$response .= "Our emergency rescue team is on the way";
}
else if ($text == "1*1*1*0") {
$response = "Your request has been canceled";
$response .= "Thanks for using our service, \n Brought to you by Imbokodo";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
$response  = "CON  Kies 'n opsie hieronder\n";
$response .= "1. Noodwaarskuwing \n";
$response .= "2. Huis van veiligheid \n";
$response .= "3. Verlaat u mishandelaar \n";
$response .= "4. Dokumentberging\n";
}
// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
$response .= "Dit is slegs vir onmiddellike noodgevalle \n";
$response .= "Voer 1 in om voort te gaan 0 in om te kanselleer \n";

}
else if ($text == "1*2*1*1") {
$response = "U waarskuwing is ontvang";
$response .= "Voer u adres hieronder in";
$response .= "Ons noodreddingspan is op pad";
}
else if ($text == "1*2*1*0") {
$response = "U versoek is gekanselleer";
$response .= "Dankie vir die gebruik van ons diens, \ngebring deur Imbokodo";
}
// Menu for a user who selects "3" from the second menu above
// Will be brought to this fith menu screen
else if ($text == "1*3") {
$response  = "CON  Ka kopo khetha khetho e ka tlase\n";
$response .= "1. Tlhokomeliso ea maemo a tšohanyetso \n";
$response .= "2. Ntlo e Sireletsehileng \n";
$response .= "3. Ho siea motho ea u hlekefetsang \n";
$response .= "4. Tokomane ea polokelo\n";
  }
// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "CON An organisation will contact you to come up with a safety plan that is best for you";
$response .= "Enter your phone number to continue \n";
$response .= "Enter 0 to cancel \n";
}
else if ($text == "1*3*1*1") {
$response = "END Thank you, you will be contacted soon to discuss a safety plan";
}
else if ($text == "1*3*1*0") {
$response = "END Your request has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response  = "CON Sicela ukhethe inketho engezansi\n";
$response .= "1. Isaziso Esiphuthumayo \n";
$response .= "2. Indlu Ephephile \n";
$response .= "3. Ukushiya umhlukumezi wakho \n";
$response .= "4. Isitoreji Sombhalo\n";
}
// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
$response = "Please take the following original doccuments";
$response .= "ID/Birth certificate";
$response .= "Educational certificates";
$response .= "Legal doccuments ";
$response .= " Medical doccuments";
$response .= " Take these doccuments to an organisation near you \n";
}

// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
$response = "CON An organisation will contact you to come up with a safety plan that is best for you";
$response .= "Enter your phone number to continue \n";
$response .= "Enter 0 to cancel \n";
}
else if ($text == "1*3*1*1") {
$response = "END Thank you, you will be contacted soon to discuss a safety plan";
}
else if ($text == "1*3*1*0") {
$response = "END Your request has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*1*4") {
$response = "Please take the following original doccuments";
$response .= "ID/Birth certificate";
$response .= "Educational certificates";
$response .= "Legal doccuments ";
$response .= " Medical doccuments";
$response .= " Take these doccuments to an organisation near you \n";
}
//echo response
header('Content-type: text/plain');
echo $response
?>
