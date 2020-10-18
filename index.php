<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Welcome to Imbokodo get assistance or learn more. \r\n";
  
$response .= "Enter 1 to continue \r\n";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  Please select a language. \r\n";
  
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
// Menu for a user who selects '1' from the second menu
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response  = "CON Please select an option below\n";
$response .= "1. Emergency Alert \n";
$response .= "2. Safe House \n";
$response .= "3. Leaving your abuser \n";
$response .= "4. Document Storage\n";
}
//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
else if ($text == "1*1*1") {
$response  = "CON This is only for immediate emergency \r\n";
$response .= "Enter 1 to continue or 0 to cancel \r\n";
}
else if ($text == "1*1*1*1") {
$response = "CON Your alert has been recieved \r\n";
$response .= "Enter your address below \r\n";
$response .= "Our emergency rescue team is on the way \r\n";
}
else if ($text == "1*1*1*0") {
$response = "CON Your request has been canceled \r\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo \r\n";
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
$response  = "CON Dit is slegs vir onmiddellike noodgevalle \r\n";
$response .= "Voer 1 in om voort te gaan 0 in om te kanselleer \r\n";

}
else if ($text == "1*2*1*1") {
$response  = "CON U waarskuwing is ontvang \r\n";
$response .= "Voer u adres hieronder in \r\n";
$response .= "Ons noodreddingspan is op pad \r\n";
}
else if ($text == "1*2*1*0") {
$response = "CON U versoek is gekanselleer \r\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo \r\n";
}
// Menu for a user who selects "3" from the second menu above
// Will be brought to this fith menu screen
else if ($text == "1*3") {
$response  = "CON  Ka kopo khetha khetho e ka tlase \r\n";
$response .= "1. Tlhokomeliso ea maemo a tšohanyetso \n";
$response .= "2. Ntlo e Sireletsehileng \n";
$response .= "3. Ho siea motho ea u hlekefetsang \n";
$response .= "4. Tokomane ea polokelo\n";
}
else if ($text == "1*3*1") {
$response  = "CON Sena ke sa maemo a tšohanyetso \r\n";
$response .= "Kenya 1 ho tsoela pele \n";
$response .= "Kenya 0 ho hlakola \r\n";
}
else if ($text == "1*3*1*1") {
$response  = "CON Tlhokomeliso ea hau e amohetsoe \r\n";
$response .= "Kenya aterese ea hau ka tlase \r\n";
$response .= "Sehlopha sa rona sa pholoso \r\n sa maemo a tšohanyetso se tseleng \r\n";
}
else if ($text == "1*3*1*0") {
$response  = "CON Kopo ea hau e hlakotsoe \r\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n u tliselitse eona ka Imbokodo \r\n";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
$response  = "CON Sicela ukhethe inketho engezansi \r\n";
$response .= "1. Isaziso Esiphuthumayo \r\n";
$response .= "2. Indlu Ephephile \r\n";
$response .= "3. Ukushiya umhlukumezi wakho \r\n";
$response .= "4. Isitoreji Sombhalo \r\n";
}
else if ($text == "1*4*1") {
$response  = "CON Lokhu kwenzelwa isimo esiphuthumayo \n esisheshayo kuphela \r\n";
$response .= "Faka u-1 ukuze uqhubeke \r\n";
$response .= "Faka u-0 ukuze ukhansele \r\n";
}
else if ($text == "1*4*1*1") {
$response  = "CON Isaziso sakho sitholiwe \r\n";
$response .= "Faka ikheli lakho ngezansi \r\n";
$response .= "Ithimba lethu labezimo eziphuthumayo lisendleleni \r\n";
}
else if ($text == "1*4*1*0") {
$response = "CON Isicelo sakho sikhanseliwe \r\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu \r\n Esilethelwe yona yi-Imbokodo \r\n";
}
else if ($text == "1*1*2") {
$response = "CON Safe houses are organisations that can help you \r\n with a accomodation and other services \r\n";
$response .= "Please Enter 1 to confirm your need for a safe house \r\n";
$response .= "Please Enter 0 to cancel \r\n";
}

else if ($text == "1*1*2*1") {
$response = "CON Your safe house request has been recieved \r\n";
$response .= "Enter your address below, if you need transport \r\n";
$response .= "Our emergency rescue team is on the way \r\n";
}

else if ($text == "1*1*2*0") {
$response = "Your request has been canceled \r\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo \r\n";
}

else if ($text == "1*2*2") {
$response = "CON Veilige huise is organisasies wat u kan help \r\n met akkommodasie en ander dienste \r\n";
$response .= "Voer 1 in om u behoefte aan 'n veilige huis te bevestig \r\n";
$response .= "Voer asseblief 0 in om te kanselleer \r\n";
}

else if ($text == "1*2*2*1") {
$response = "CON U veilige huisversoek is ontvang \r\n";
$response .= "Voer u adres hieronder in as u vervoer benodig \r\n";
$response .= "Ons noodreddingspan is op pad \r\n";
}

else if ($text == "1*2*2*0") {
$response = " CON U versoek is gekanselleer \r\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo \r\n";
}

//echo response
header('Content-type: text/plain');
echo $response
?>
