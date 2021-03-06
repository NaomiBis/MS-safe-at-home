<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
$x = $_POST[""];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Welcome to Imbokodo get assistance or learn more. \r\n";
  
$response .= "Enter 1 to continue \r\n";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
//user will be able to choose language option
else if ($text == "1") {
$response  = "CON  Please select a language. \r\n";
$response .= "\n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
// Menu for a user who selects '1' from the second menu
// Will be brought to this third menu screen
//English Option:user will be able to choose which option best fits them
else if ($text == "1*1") {
$response  = "CON Please select an option below:\n";
$response .= "\n";
$response .= "1. Emergency Alert \n";
$response .= "2. Safe House \n";
$response .= "3. Leaving your abuser \n";
$response .= "4. Document Storage\n";
}
//Menu for a user who selects '1' from the third menu above
// Will be brought to this third menu screen
//Emidiate emergency option which will alert a emergency team
else if ($text == "1*1*1") {
$response  = "CON This is only for immediate emergency. \r\n";
$response .= "\n";
$response .= "Enter 1 to continue. \r\n";
$response .= "Enter 0 to cancel. \r\n";
}
//Emergency option in english, user will confirm their location and emergency service will get notified 
else if ($text == "1*1*1*1") {
$response = "CON Your alert has been recieved \r\n";
$response .= "\n";
$response .= "Enter 1 to confirm your device's current location as an emergency pick up location. \r\n";
$response .= "Enter 2 to recieve a call and confirm your location for an emergency pick up.   \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*1*1*1*1") {
$response = "CON Your alert has been recieved \r\n";
$response .= "\n";
$response .= "Remain calm, our emergency rescue team is on the way to pick you.\r\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team by recieving a call
else if ($text == "1*1*1*1*2") {
$response = "CON Your alert has been recieved \r\n";
$response .= "\n";
$response .= "Remain calm, you will receive a call shortly \r\n to confirm your emergency pick up location.\r\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo. \r\n";
}
// User cancels emergency option
else if ($text == "1*1*1*0") {
$response = "CON Your request has been canceled. \r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo. \r\n";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
//Afrikaans Option: user selects option that best fits their need
else if ($text == "1*2") {
$response  = "CON  Kies 'n opsie hieronder:\n";
$response .= "\n";
$response .= "1. Noodwaarskuwing \n";
$response .= "2. Huis van veiligheid \n";
$response .= "3. Verlaat u mishandelaar \n";
$response .= "4. Dokumentberging\n";
}
// Menu for a user who selects "1" from the fourth menu screen
// Will be brought to this fourth menu screen
//Afrikaans option: Emidiate emergency option which will alert a emergency team
else if ($text == "1*2*1") {
$response  = "CON Dit is slegs vir onmiddellike noodgevalle \r\n";
$response .= "\n";
$response .= "Voer 1 in om voort te gaan 0 in om te kanselleer \r\n";

}
//Emergency option in afrikaans, user will insert their adress and emergency service will get notified 
else if ($text == "1*2*1*1") {
$response  = "CON U waarskuwing is ontvang \r\n";
$response .= "\n";
$response .= "Voer 1 in om u foon se huidige ligging as 'n noodoplaai-plek te bevestig.. \r\n";
$response .= "Voer 2 in om 'n oproep te ontvang en bevestig die plek vir 'n noodopname.   \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*2*1*1*1") {
$response = "CON U waarskuwing is ontvang. \r\n";
$response .= "\n";
$response .= "Bly kalm, ons noodreddingspan is op pad om u te kies.\r\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo. \r\n";
}
else if ($text == "1*2*1*1*2") {
$response = "CON U waarskuwing is ontvang. \r\n";
$response .= "\n";
$response .= "Bly kalm, u sal binnekort 'n oproep ontvang \r\n om u noodhaalplek te bevestig.\r\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo. \r\n";
}
// User cancels emergency option
else if ($text == "1*2*1*0") {
$response = "CON U versoek is gekanselleer \r\n";
$response .= "\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo. \r\n";
}
// Menu for a user who selects "3" from the second menu above
// Will be brought to this fith menu screen
//Sotho option: user selects option that best fits their need
else if ($text == "1*3") {
$response  = "CON  Ka kopo khetha khetho e ka tlase: \r\n";
$response .= "\n";
$response .= "1. Tlhokomeliso ea maemo \r\n a tšohanyetso \r\n";
$response .= "2. Ntlo e Sireletsehileng \r\n";
$response .= "3. Ho siea motho ea u hlekefetsang \r\n";
$response .= "4. Tokomane ea polokelo\r\n";
}
// Menu for a user who selects "3" from the fourth menu screen
// Will be brought to this fifth menu screen
//Sotho option: Emidiate emergency option which will alert a emergency team
else if ($text == "1*3*1") {
$response  = "CON Sena ke sa maemo a tšohanyetso. \r\n";
$response .= "\n";
$response .= "Kenya 1 ho tsoela pele. \n";
$response .= "Kenya 0 ho hlakola. \r\n";
}
//Emergency option in sotho, user will insert their adress and emergency service will get notified 
else if ($text == "1*3*1*1") {
$response  = "CON Tlhokomeliso ea hau e amohetsoe. \r\n";
$response .= "\n";
$response .= "Kenya 1 ho netefatsa sebaka seo fono e leng ho sona hajoale \r\n e le boemo ba tšohanyetso. \r\n";
$response .= "\n";
$response .= "Kenya 2 ho amohela mohala le ho netefatsa sebaka sa hau \r\n bakeng sa ho nka boemo ba tšohanyetso. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*3*1*1*1") {
$response = "CON Tlhokomeliso ea hau e amohetsoe. \r\n";
$response .= "\n";
$response .= "Lula u khobile matšoafo, sehlopha sa rona sa pholoso se potlakileng \r\n se tseleng ho u khetha.\r\n";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n u tliselitse eona ka Imbokodo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team by recieving a call
else if ($text == "1*3*1*1*2") {
$response = "CON Tlhokomeliso ea hau e amohetsoe. \r\n";
$response .= "\n";
$response .= "Lula u khobile matšoafo, o tla fumana mohala haufinyane \r\ n ho netefatsa sebaka sa hau sa maemo a tšohanyetso.\r\n";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n u tliselitse eona ka Imbokodo. \r\n";
}
// User cancels emergency option
else if ($text == "1*3*1*0") {
$response  = "CON Kopo ea hau e hlakotsoe \r\n";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n u tliselitse eona ka Imbokodo. \r\n";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
//Zulu Option: user selects option that best fits their need
else if ($text == "1*4") {
$response  = "CON Sicela ukhethe inketho engezansi: \r\n";
$response .= "\n";
$response .= "1. Isaziso Esiphuthumayo \r\n";
$response .= "2. Indlu Ephephile \r\n";
$response .= "3. Ukushiya umhlukumezi wakho \r\n";
$response .= "4. Isitoreji Sombhalo \r\n";
}
// Menu for a user who selects "4" from the fifth menu screen
// Will be brought to this fifth menu screen
//Zulu option: Emidiate emergency option which will alert a emergency team
else if ($text == "1*4*1") {
$response  = "CON Lokhu kwenzelwa isimo esiphuthumayo \n esisheshayo kuphela. \r\n";
$response .= "\n";
$response .= "Faka u-1 ukuze uqhubeke \r\n";
$response .= "Faka u-0 ukuze ukhansele \r\n";
}
//Emergency option in zulu, user will insert their adress and emergency service will get notified 
else if ($text == "1*4*1*1") {
$response  = "CON Isaziso sakho sitholiwe. \r\n";
$response .= "\n";
$response .= "Faka u-1 ukuze uqinisekise indawo okuyo manje yefoni yakho \r\n njengendawo yokulanda okuphuthumayo. \r\n";
$response .= "Faka okungu-2 ukuthola ucingo bese uqinisekisa indawo okuyo \r\n yesimo esiphuthumayo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*4*1*1*1") {
$response = "CON Isaziso sakho sitholiwe. \r\n";
$response .= "\n";
$response .= "Hlala uzolile, ithimba lethu labezimo eziphuthumayo \r\n lisendleleni elizokuthatha.\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu \r\n Esilethelwe yona yi-Imbokodo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team by recieving a call
else if ($text == "1*4*1*1*2") {
$response = "CON Isaziso sakho sitholiwe. \r\n";
$response .= "\n";
$response .= "Hlala uzolile, uzothola ucingo maduzane \r\n ukuze uqinisekise indawo ozolandwa kuyo ephuthumayo.\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu \r\n Esilethelwe yona yi-Imbokodo. \r\n";
}
// User cancels emergency option
else if ($text == "1*4*1*0") {
$response = "CON Isicelo sakho sikhanseliwe. \r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu \r\n Esilethelwe yona yi-Imbokodo. \r\n";
}
// Menu for a user who selects '2' from the second menu
// Will be brought to this third menu screen
// English option: User will have acess to safe houses
else if ($text == "1*1*2") {
$response = "CON Safe houses are organisations that can help you \r\n with a accomodation and other services \r\n";
$response .= "\n";
$response .= "Please Enter 1 to confirm your need for a safe house. \r\n";
$response .= "\n";
$response .= "Please Enter 0 to cancel \r\n";
}
// Third menu screen 
// User will chose a safe house option and transport will be requested from emergency team
else if ($text == "1*1*2*1") {
$response = "CON Your safe house request has been recieved \r\n";
$response .= "\n";
$response .= "Enter 1 to confirm your device's current location as an emergency pick up location. \r\n";
$response .= "\n";
$response .= "Enter 2 to recieve a call and confirm your location for an emergency pick up.   \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*1*2*1*1") {
$response = "CON Your alert has been recieved \r\n";
$response .= "\n";
$response .= "Remain calm, our emergency rescue team is on the way to pick you.\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team by recieving a call
else if ($text == "1*1*2*1*2") {
$response = "CON Your alert has been recieved \r\n";
$response .= "\n";
$response .= "Remain calm, you will receive a call shortly \r\n to confirm your emergency pick up location.\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo. \r\n";
}
//English: User cancels safe house option
else if ($text == "1*1*2*0") {
$response = "CON Your request has been canceled \r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo \r\n";
}
// Menu for a user who selects '2' from the second menu
// Will be brought to this third menu screen
//Afrikaans option: User will have acess to safe houses
else if ($text == "1*2*2") {
$response = "CON Veilige huise is organisasies wat u kan help \r\n met akkommodasie en ander dienste \r\n";
$response .= "\n";
$response .= "Voer 1 in om u behoefte aan 'n veilige huis te bevestig \r\n";
$response .= "\n";
$response .= "Voer asseblief 0 in om te kanselleer \r\n";
}
//Third menu screen
//User will chose a safe house option and transport will be requested from emergency team
else if ($text == "1*2*2*1") {
$response = "CON U veilige huisversoek is ontvang \r\n";
$response .= "\n";
$response .= "Voer 1 in om u foon se huidige ligging as 'n noodoplaai-plek te bevestig.. \r\n";
$response .= "\n";
$response .= "Voer 2 in om 'n oproep te ontvang en bevestig die plek vir 'n noodopname.   \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*2*2*1*1") {
$response = "CON U waarskuwing is ontvang. \r\n";
$response .= "\n";
$response .= "Bly kalm, ons noodreddingspan is op pad om u te kies.\r\n";
$response .= "\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo. \r\n";
}
else if ($text == "1*2*2*1*2") {
$response = "CON U waarskuwing is ontvang. \r\n";
$response .= "\n";
$response .= "Bly kalm, u sal binnekort 'n oproep ontvang \r\n om u noodhaalplek te bevestig.\r\n";
$response .= "\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo. \r\n";
}
//afrikaans: User cancels safe house option
else if ($text == "1*2*2*0") {
$response = "CON U versoek is gekanselleer \r\n";
$response .= "\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo \r\n";
}
// Menu for a user who selects '3' from the second menu
// Will be brought to this third menu screen
//Sotho option: User will have acess to safe houses
else if ($text == "1*3*2") {
$response = "CON Matlo a bolokehileng ke mekhatlo e ka u thusang \n ka bolulo le lits'ebeletso tse ling\r\n";
$response .= "\n";
$response .= "Ka kopo kenya 1 ho netefatsa tlhoko ea hau ea ntlo e bolokehileng\r\n";
$response .= "\n";
$response .= "Ka kopo kenya 0 ho hlakola \r\n";
}
//Third menu screen 
//User will chose a safe house option and transport will be requested from emergency team
else if ($text == "1*3*2*1") {
$response = "CON Kopo ea hau ea ntlo e bolokehileng e amohetsoe \r\n";
$response .= "\n";
$response .= "Kenya 1 ho netefatsa sebaka seo fono e leng ho sona hajoale \r\n e le boemo ba tšohanyetso. \r\n";
$response .= "\n";
$response .= "Kenya 2 ho amohela mohala le ho netefatsa sebaka sa hau \r\n bakeng sa ho nka boemo ba tšohanyetso. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*3*2*1*1") {
$response = "CON Tlhokomeliso ea hau e amohetsoe. \r\n";
$response .= "\n";
$response .= "Lula u khobile matšoafo, sehlopha sa rona sa pholoso se potlakileng \r\n se tseleng ho u khetha.\r\n";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n u tliselitse eona ka Imbokodo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team by recieving a call
else if ($text == "1*3*2*1*2") {
$response = "CON Tlhokomeliso ea hau e amohetsoe. \r\n";
$response .= "\n";
$response .= "Lula u khobile matšoafo, o tla fumana mohala haufinyane \r\ n ho netefatsa sebaka sa hau sa maemo a tšohanyetso.\r\n";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n u tliselitse eona ka Imbokodo. \r\n";
}
//Sotho: User cancels safe house option
else if ($text == "1*3*2*0") {
    $response = "CON Kopo ea hau e hlakotsoe \r\n";
    $response .= "Re leboha ho sebelisa ts'ebeletso ea rona,\r\nE u tliselitse eona ka Imbokodo \r\n";
}


// Menu for a user who selects '4' from the second menu
// Will be brought to this third menu screen
//Zulu option: User will have acess to safe house
else if ($text == "1*4*2") {
$response  = "CON Izindlu eziphephile izinhlangano ezingakusiza \r\n ngendawo yokuhlala kanye nezinye izinsiza \r\n";
$response .= "\n";
$response .= "Sicela ufake u-1 ukuqinisekisa isidingo sakho sendlu ephephile\r\n";
$response .= "\n";
$response .= "Sicela ufake u-0 ukuze ukhansele\r\n";
}
//Third menu screen 
//User will chose a safe house option and transport will be requested from emergency team
else if ($text == "1*4*2*1") {
$response  = "CON Isicelo sakho sendlu ephephile sitholiwe\r\n";
$response .= "\n";
$response .= "Faka u-1 ukuze uqinisekise indawo okuyo manje yefoni yakho \r\n njengendawo yokulanda okuphuthumayo. \r\n";
$response .= "\n";
$response .= "Faka okungu-2 ukuthola ucingo bese uqinisekisa indawo okuyo \r\n yesimo esiphuthumayo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team using a device's current location
else if ($text == "1*4*2*1*1") {
$response = "CON Isaziso sakho sitholiwe. \r\n";
$response .= "\n";
$response .= "Hlala uzolile, ithimba lethu labezimo eziphuthumayo \r\n lisendleleni elizokuthatha.\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu \r\n Esilethelwe yona yi-Imbokodo. \r\n";
}
// User recieves confirmation emergency pick up message from the rescue team by recieving a call
else if ($text == "1*4*2*1*2") {
$response = "CON Isaziso sakho sitholiwe. \r\n";
$response .= "\n";
$response .= "Hlala uzolile, uzothola ucingo maduzane \r\n ukuze uqinisekise indawo ozolandwa kuyo ephuthumayo.\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu \r\n Esilethelwe yona yi-Imbokodo. \r\n";
}
// Zulu: User cancels safe house option
else if ($text == "1*4*2*0") {
$response  = "CON Isicelo sakho sikhanseliwe\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu, n\ Esilethelwe yona yi-Imbokodo\r\n";
}
// Menu for a user who selects '1' from the second menu
// Will be brought to this fourth menu screen
// English option for advice
else if ($text == "1*1*3") {
$response = "CON Do you need advice on how to leave your abuser? \r\n";
$response .= "\n";
$response .= "Enter 1 to continue \r\n";
$response .= "Enter 0 to cancel \r\n";
}

// Menu for a user who enters "1" from the fifth menu
// User will enter details that will be needed to be sent to the necessary organisations
else if ($text == "1*1*3*1") {
$response = "CON Please choose one option below to proceed:\r\n";
$response .= "\n";
$response .= "Enter 1 to recieve a call on the number you're currently using on Imbokodo  \r\n";
$response .= "\n";
$response .= "Enter 2 to send to recieve a call on an alternative number, \r\n provided it is recorded in our database";
$response .= "\n";
$response .= "Enter 0 to cancel \r\n";
}
//if user chooses option 1
else if ($text == "1*1*3*1*1") {
$response = "CON An organisation will contact you shortly with a safety plan\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}
//if user chooses option 2
else if ($text == "1*1*3*1*2") {
$response = "CON An organisation will contact you shortly with a safety plan\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}

//if user cancels
else if ($text == "1*1*3*1*0") {
$response = "CON Your request has been canceled\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}

 // Menu for a user who selects "2" from the second menu above
  // Will be brought to this fourth menu screen
  //Afrikaans option for advice
else if ($text == "1*2*3") {
$response = "CON Het u advies nodig oor hoe u u mishandelaar moet verlaat? \r\n";
$response .= "Voer 1 in om voort te gaan \r\n";
$response .= "Voer 0 in om te kanselleer\r\n";
}

    // Menu for a user who enters "1" from the fifth menu
// User will enter details that will be needed to be sent to the necessary organisations
else if ($text == "1*2*3*1") {
$response = "CON Kies een opsie hieronder om voort te gaan.:\r\n";
$response .= "\n";
$response .= "Voer 1 in om 'n oproep te ontvang vir die nommer wat u tans op Imbokodo gebruik.  \r\n";
$response .= "\n";
$response .= "Voer 2 in om te stuur om 'n alternatiewe nommer te ontvang, \r\n mits dit in ons databasis opgeteken is.";
$response .= "\n";
$response .= "Voer 0 in om te kanselleer \r\n";
}
//if user chooses option 1
else if ($text == "1*2*3*1*1") {
$response = "CON N Organisasie sal binnekort met \r\n u in verbinding tree met 'n veiligheidsplan\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}
//if user chooses option 2
else if ($text == "1*2*3*1*2") {
$response = "CON N Organisasie sal binnekort met \r\n u in verbinding tree met 'n veiligheidsplan\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}
//if user cancels
else if ($text == "1*2*3*1*0") {
$response = "CON U versoek is gekanselleer\r\n";
$response .= "\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo\r\n";
}

    // Menu for a user who selects "3" from the second menu above
   // Will be brought to this fourth menu screen
   // Sotho option for
else if ($text == "1*3*3") {
$response = "CON Na o hloka likeletso mabapi le hore \r\n na o ka tlohela joang motho ea u hlekefetsang? \r\n";
$response .= "\n";
$response .= "Kenya 1 ho tsoela pele \r\n";
$response .= "\n";
$response .= "Kenya 0 ho hlakola\r\n";
}

// Menu for a user who enters "1" from the fifth menu
// User will enter details that will be needed to be sent to the necessary organisations
else if ($text == "1*3*3*1") {
$response = "CON Ka kopo khetha khetho e le 'ngoe ka tlase ho tsoela pele:\r\n";
$response .= "\n";
$response .= "Kenya 1 ho amohela mohala ka nomoro eo o e sebelisang hajoale ho Imbokodo.  \r\n";
$response .= "\n";
$response .= "Kenya 2 ho romella ho amohela mohala ho nomoro e ngoe, \r\n ha feela e tlalehiloe polokelongtshedimosetsong ea rona. \r\n";
$response .= "\n";
$response .= "Kenya 0 ho hlakola\r\n";
}
//if user chooses option 1
else if ($text == "1*3*3*1*1") {
$response = "CON Mokhatlo o tla ikopanya le uena \r\n haufinyane ka moralo oa polokeho\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}
//if user chooses option 2
else if ($text == "1*3*3*1*2") {
$response = "CON Mokhatlo o tla ikopanya le uena \r\n haufinyane ka moralo oa polokeho\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\n Brought to you by Imbokodo\r\n";
}
//if user cancels
else if ($text == "1*3*3*1*0") {
$response = "CON Kopo ea hau e hlakotsoe";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n E u tliselitse eona ka Imbokodo\r\n";
}

 // Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
 //Zulu option for advice
else if ($text == "1*4*3") {
$response = "CON Ngabe udinga izeluleko zokuthi ungamshiya \r\n kanjani umhlukumezi wakho? \r\n";
$response .= "Faka u-1 ukuze uqhubeke \r\n";
$response .= "Faka u-0 ukuze ukhansele\r\n";
}

   // Menu for a user who enters "1" from the fifth menu
// User will enter details that will be needed to be sent to the necessary organisations
 else if ($text == "1*4*3*1") {
$response = "CON Sicela ukhethe inketho eyodwa ngezansi ukuze uqhubeke:\r\n";
$response .= "\n";
$response .= "Faka u-1 ukuthola ucingo enombolweni oyisebenzisa njengamanje ku-Imbokodo.  \r\n";
$response .= "\n";
$response .= "Faka u-2 ukuze uthumele ukwamukela ikholi kwenye inombolo, \r\n inqobo nje uma irekhodwe kusizindalwazi sethu.";
$response .= "\n";
$response .= "Faka u-0 ukuze ukhansele\r\n";
}
//if user chooses option 1
else if ($text == "1*4*3*1*1") {
$response = "Inhlangano izokuthinta maduzane ngohlelo lokuphepha\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu, \r\n Esilethelwe yona yi-Imbokodo\r\n";
}
//if user chooses option 2
else if ($text == "1*4*3*1*2") {
$response = "CON Inhlangano izokuthinta maduzane ngohlelo lokuphepha\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu, \r\n Esilethelwe yona yi-Imbokodo\r\n";
}
//if user cancels
else if ($text == "1*4*3*1*0") {
$response = "CON Isicelo sakho sikhanseliwe\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu, \r\n Esilethelwe yona yi-Imbokodo\r\n";
}
// Menu for a user who selects '4' from the second menu
// Will be brought to this sixth menu screen
// English option for keeping important documents
else if ($text == "1*1*4") {
$response = "CON This is for keeping your important documents safe at an organisation\r\n";
$response .= "\n";
$response .= "Please Enter 1 to continue \r\n";
$response .= "Please Enter 0 to cancel \r\n";
}

  // Menu for a user who enters "1" from the sixth menu
//will be brought to seventh menu screen
  // English option: user will be able to know which document they would need to take to the nearest safe house or police station
 else if ($text == "1*1*4*1") {
$response  = "CON Please take the following original documents\r\n";
$response .= "\n";
$response .= "ID/Birth certificate & Educational certificate\r\n";
$response .= "Legal documents & Medical documents\r\n";
$response .= "To the nearest organisation or police station\r\n";
$response .= "\n";
$response .= "To return to the main menu, Enter 9 below \r\n";
$response .= "To exit Enter 5 below \r\n";
}
//user cancels request
else if ($text == "1*1*4*0") {
$response = "CON Your request has been canceled\r\n";
$response .= "\n";
$response .= "Thanks for using our service, \r\nBrought to you by Imbokodo. \r\n";
}
//user selects 9 as an option from the menu section
else if ($text == "1*1*4*1*9") {
$response  = "CON  Please select a language \n";
$response .= "\n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
//user selects exit option from the first menu section
else if ($text == "1*1*4*1*5") {
$response = "CON Thanks for using our service, \r\nBrought to you by Imbokodo.\r\n";
}


    // Menu for a user who enters "4" from the second menu above
   // Will be brought to this sixth menu screen
   // Afrikaans option: user will be able to know which document they would need to take to the nearest safe house or police station
else if ($text == "1*2*4") {
$response = "CON Dit is om u belangrike dokumente by 'n organisasie veilig te hou. \r\n";
$response .= "\n";
$response .= "Voer 1 in om voort te gaan \r\n";
$response .= "Voer asseblief 0 in om te kanselleer \r\n";
}

    // Menu for a user who enters "1" from the sixth menu
    //will be brought to seventh menu screen
    // Afrikaans option: user will be able to know which document they would need to take to the nearest safe house or police station
else if ($text == "1*2*4*1") {
$response =  "CON Neem asseblief die volgende oorspronklike dokumente\r\n";
$response .= "\n";
$response .= "ID/Geboortesertifikaat & Opvoedkundige sertifikaat\r\n";
$response .= "Regsdokumente en mediese dokumente\r\n";
$response .= "Na die naaste organisasie of polisiekantoor\r\n";
$response .= "\n";
$response .= "Voer 9 hieronder in om terug te keer na die hoofmanne \r\n";
$response .= "Om Enter 5 hieronder te verlaat. \r\n";
}
//user cancels
else if ($text == "1*2*4*0") {
$response = "CON U versoek is gekanselleer\r\n";
$response .= "\n";
$response .= "Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo\r\n";
}
//user selects 9 as an option from the menu section
else if ($text == "1*2*4*1*9") {
$response  = "CON  Please select a language \n";
$response .= "\n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
//user selects exit option from the first menu section
else if ($text == "1*2*4*1*5") {
$response = "CON Dankie vir die gebruik van ons diens, \r\n gebring deur Imbokodo.\r\n";
}


    // Menu for a user who enters "4" from the second menu above
   // Will be brought to this sixth menu screen
   // Sotho option for keeping important documents
else if ($text == "1*3*4") {
$response = "CON Sena ke bakeng sa ho boloka litokomane \r\ntsa hau tsa bohlokoa li bolokehile \r\n mokhatlong o hlophisitsoeng\r\n";
$response .= "\n";
$response .= "Ka kopo kenya 1 ho tsoela pele \r\n";
$response .= "Ka kopo kenya 0 ho hlakola \r\n";
}

   // Menu for a user who enters "1" from the sixth menu
//will be brought to seventh menu screen
  // Sotho option: user will be able to know which document they would need to take to the nearest safe house or police station
else if ($text == "1*3*4*1") {
$response =  "CON Ka kopo nka litokomane tsa mantlha tse latelang\r\n";
$response .= "\n";
$response .= "Setifikeiti sa ID/Tsoalo le setifikeiti sa thuto\r\n";
$response .= "Litokomane tsa molao le litokomane tsa bongaka\r\n";
$response .= "Ho ea mokhatlong o haufi kapa seteisheneng sa mapolesa\r\n";
$response .= "\n";
$response .= "Ho khutlela ho menu ya ka sehloohong, Kenya 9 ka tlase\r\n";
$response .= "Ho tsoa Kenya 5 ka tlase \r\n";
}
//user cancel
else if ($text == "1*3*4*0") {
$response = "CON Kopo ea hau e hlakotsoe\r\n";
$response .= "\n";
$response .= "Re leboha ho sebelisa ts'ebeletso ea rona, \r\n E u tliselitse eona ka Imbokodo\r\n";
}
//user selects exit option from the first menu section
else if ($text == "1*3*4*1*5") {
$response = "CON Re leboha ho sebelisa ts'ebeletso ea rona, \r\n E u tliselitse eona ka Imbokodo.\r\n";
}
//user selects 9 option from the menu section
else if ($text == "1*3*4*1*9") {
$response  = "CON  Please select a language \n";
$response .= "\n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}

    // Menu for a user who enters "4" from the second menu above
 // Will be brought to this sixth menu screen
 // Zulu option for keeping important documents
else if ($text == "1*4*4") {
$response = "CON Lokhu kwenzelwa ukugcina imibhalo yakho \r\n ebalulekile iphephile enhlanganweni\r\n";
$response .= "\n";
$response .= "Faka u-1 ukuze uqhubeke \r\n";
$response .= "Faka u-0 ukuze ukhansele\r\n";
}

    // Menu for a user who enters "1" from the sixth menu
    //will be brought to seventh menu screen
  // Zulu option: user will be able to know which document they would need to take to the nearest safe house or police station
else if ($text == "1*4*4*1") {
$response =  "CON Sicela uthathe imibhalo yokuqala elandelayo\r\n";
$response .= "\n";
$response .= "Isitifiketi se-ID/sokuzalwa nesitifiketi semfundo\r\n";
$response .= "Imibhalo yezomthetho nemibhalo yezokwelapha\r\n";
$response .= "Enhlanganweni esiseduzane noma esiteshini samaphoyisa\r\n";
$response .= "\n";
$response .= "Ukubuyela kumenu ephambili, Faka u-9 ngezansi\r\n";
$response .= "To exit Enter 5 below \r\n";
}
//user cancels request
else if ($text == "1*4*4*0") {
$response = "CON Isicelo sakho sikhanseliwe\r\n";
$response .= "\n";
$response .= "Siyabonga ngokusebenzisa insiza yethu, n\ Esilethelwe yona yi-Imbokodo\r\n";
}
//user selects 9 as an option from the menu section
else if ($text == "1*4*4*1*9") {
$response  = "CON  Please select a language \n";
$response .= "\n";
$response .= "1. English \n";
$response .= "2. Afrikaans \n";
$response .= "3. Sotho \n";
$response .= "4. Zulu \n";
}
//user selects exit option from the first menu section
else if ($text == "1*4*4*1*5") {
$response = "CON Thanks for using our service, \r\nBrought to you by Imbokodo.\r\n";
}

//echo response
header('Content-type: text/plain');
echo $response
?>
