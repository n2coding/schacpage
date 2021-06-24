<?php
// File : dutch/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Bert Moorlag <berbia@hotmail.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Volgende");
define("L_BTN2", "Annuleer");
define("L_BTN3", "Terug");
define("L_BTN4", "Herlaad");
define("L_BTN5", "Voltooien");
define("L_BTN6", "Sla over");
define("L_CONN_ERROR", "FTP-host adres is verkeerd!<br />Ga terug en controleer je ftp host adres.");
define("L_LOGIN_ERROR", "Login verificatie lukte niet!<br />Ga terug en check je login gebruikersnaam en wachtwoord.");
define("L_FTP_NAME", "FTP gebruikersnaam niet ingevuld!");
define("L_FTP_PASS", "FTP wachtwoord niet ingevuld!");
define("L_DB_NOCONNECT", "Kan geen verbinding maken met de database!");
define("L_DB_HINT1", "Database %s bestaat niet en kan niet worden gemaakt!");
define("L_PASS_ERROR1", "Je hebt geen beheerders naam ingevuld.<br />Ga terug en kies een naam voor jou Beheerders Account!");
define("L_PASS_ERROR2", "Je moet de wachtwoord veld invullen.<br />Ga terug en vul 2 x je wachtwoord in!");
define("L_PASS_ERROR3", "Het wachtwoord en de verificatie wachtwoord komen niet overeen.<br />Ga terug en vul opnieuw wachtwoord in!");
define("L_FILE_ERROR1", "Kan niet CHMOD de file");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Kan niet CHMOD de map");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Installer voor %s");
define("L_INST_VER", "Versie:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Pagina %s van %s");
define("L_P0_HINT1", "Welkom bij onze installatie van %s.");
define("L_P0_HINT2", "Vul je ftp login gegevens hieronder in.");
define("L_P1_HINT1", "Deze setup zal je begeleiden tijdens de installatie.<br />Selecteer welke type installatie dit is:");
define("L_P1_HINT2", "Selecteer hieronder welke type installatie dit is.");
define("L_P1_HINT3", "De FTP - gegevens lijkt niet goed te zijn. De setup kan niet verder gaan. Ga terug en verander de gegevens. Dit zijn de fouten:");
define("L_P2_HINT1", "Nu controleren we de configuratie van phpMyChat. Er moet een file worden veranderd(\"config/config.lib.php\") op deze server.");
define("L_P2_HINT2", "De configuratie file is niet overschrijfbaar. Om deze te veranderen, gebruik een FTP-program (e.g. Total Commander) om verbinding te krijgen met je server en CHMOD 666 to \"config.lib.php\" file in de configuratie map). Als je niet weet hoe dit moet of als je de permissie´s niet wilt veranderen van deze file, vul dan de formulier hieronder in en klik op \"".L_BTN1."\".");
define("L_P2_HINT3", "Note: Als je de permissie’s hebt veranderd, klik op \"".L_BTN4."\" knop na de chmod actie, om de setup te laten weten dat de file overschrijfbaar is!");
define("L_P2_HINT4", "De file \"config/config.lib.php\" is overschrijfbaar. Vul de rest van de gegevens in en deze worden automatisch bewaard in de file.");
define("L_P3_HINT1", "Ga terug naar de vorige pagina en verander de gegevens. Als de setup geen database kan maken, doe dit dan handmatig.");
define("L_P3_HINT2", "Dit zijn de configuratie resultaten die je kan plaatsen in \"config/config.lib.php\" file. Selecteer de gehele tekst, kopieer en plak het in een tekstverwerker(e.g. Notepad++). Sla deze file op als config.lib.php (let op dat de file Alle types zijn en geen Tekst document) en upload deze file via je ftp-server in  \"config\" directory.");
define("L_P3_HINT3", "Dan moet je nog een Beheerders account aanmaken, om toegang te krijgen tot de Beheerders Panel van phpMyChat.");
define("L_P3_HINT4", "Jou \"config/config.lib.php\" - file:");
define("L_P3_HINT5", "Kan de \"config/config.lib.php\" niet openen om te schrijven!");
define("L_P3_HINT6", "Ga terug naar de vorige pagina en verander de gegevens. De file is niet schrijfbaar.");
define("L_P3_HINT7", "Nu moet je een beheerders account aanmaken, om toegang te krijgen tot de Beheerders Panel van phpMyChat.");
define("L_P3_HINT8", "De veranderingen zijn opgeslagen.");
define("L_P3_HINT9", "Merk op: Deze gebruikers account heeft alle rechten in de Beheerders Panel en chatrooms!");
define("L_P3_BTN1", "Selecteer alles");
define("L_P4_HINT1", "Je hoofd Beheerders account is aangemaakt.");
define("L_P4_HINT2", "Je kunt nu inloggen in de Beheerders Panel en eventueel de configuratie aanpassen van je phpMyChat sever. Er zijn diverse mogelijkheden die je kan helpen om de chat rooms, gebruikers, berichten en meer te kunnen aanpassen. Gebruik de beschikbare Administration links om toegang te krijgen naar de Beheerders Panel .");
define("L_P4_HINT3", "Installatie voltooid. Klik \"".L_BTN5."\" om naar de chat login pagina te gaan of sluit het venster om de installatie te verlaten.");
define("L_P4_HINT4", "De setup script heeft al chmoded de benodigde files voor je en ook deze setup script verwijderd. Zorg ervoor dat de the file \"install/install.php\" is verwijderd van je web server! Is dit niet zo, verwijder deze handmatig.");
define("L_P1_OP01", "Nieuwe installatie");
define("L_P1_OP02", "Upgrade van %s");
define("L_P1_OP03", "Geen veranderingen in database");
define("L_P0_FORM1", "FTP host adres");
define("L_P0_FORM2", "FTP gebruikersnaam");
define("L_P0_FORM3", "FTP wachtwoord");
define("L_P0_FORM4", "FTP root pad (relatieve)");
define("L_P2_FORM01", "Database-Host voor phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Gebruikersnaam voor phpMyChat");
define("L_P2_FORM03", "Database-Wachtwoord voor phpMyChat");
define("L_P2_FORM04", "Database-Naam voor phpMyChat");
define("L_P2_FORM05", "Type database");
define("L_P2_FORM06", "Tabel voor berichten");
define("L_P2_FORM07", "Tabel voor gebruikers in de chat");
define("L_P2_FORM08", "Tabel voor geregistreede gebruikers");
define("L_P2_FORM09", "Tabel voor gebande gebruikers");
define("L_P2_FORM10", "Tabel voor configuratie");
define("L_P2_FORM11", "Tabel voor gluurders");
define("L_P2_FORM12", "Hernoem je beheerders logs map");
define("L_P2_FORM13", "mocht je phpMyChat willen gebruiken als een geintegreerde module voor phpNuke of phpBB, moet de configuratie tabel m \"c_config\" heten en de tabel voor geregistreerde gebruikers \"c_reg_users\"!");
define("L_P2_FORM14", "kies een moeilijk te raden naam!");
define("L_P2_FORM15", "Naam van jou Chat server");
define("L_P2_FORM16", "Tabel voor statistieken");
define("L_P2_FORM17", "Database-Port voor phpMyChat (optioneel)"); //rev.8
define("L_P2_FORM18", "PDO Database Driver (optioneel)"); //rev.9
define("L_P2_FORM19", "Prefix voor databasetabellen (optioneel)"); //rev.10
define("L_P3_FORM1", "Beheerders account naam");
define("L_P3_FORM2", "Beheerders account wachtwoord");
define("L_P3_FORM3", "Verifieer wachtwoord");
define("L_P3_FORM4", "Contact Echte naam voor emails");
define("L_P3_FORM5", "Contact email adres");
define("L_P3_FORM6", "Chat url voor emails");
define("L_P4_FORM1", "Open Beheer Panel");
define("L_P4_FORM2", "Optioneel, je kan ook een bot installeren(robot, virtuale gebruiker) voor je chat, dit kan leuk zijn voor je kamers. Dit kun je ook later doen, maar nu is het best om dit te doen. als je op onderstaande link klikt, stop het script niet tijdens openen in een nieuw venster!");
define("L_P4_FORM3", "Installeer Bot");
?>