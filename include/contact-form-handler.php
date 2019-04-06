<?php
session_start();
function verifyEmailPostSubmit()
{

    if(!$_POST){
        return  Array(true, "Meld deg på mitt nyhetsbrev");
    }
    if(!isset($_POST['email'])){
        return  Array(true, "Du må skrive inn en gyldig epostadresse");
    }
    if(!isset($_POST['captcha'])){
        return  Array(true, "Du glemte koden - skriv inn de fire bosktavene ");
    }
    
    
    $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";

    //if((bool)preg_match($v, $_POST['email'])){
    if(!validateEmail( $_POST['email'])){
        $errorMessage = "Du må skrive inn en gyldig epostadresse";
        return  Array(true, "Du må skrive inn en gyldig epostadresse");
        
    }
    if(!verifyCaptcha()){
        return  Array(true, "Ugyldig kode - skriv inn de fire bosktavene på ny");
       
    }

    sendMailAdmin($_POST['username'], $_POST['email']);
    sendMailUser($_POST['username'], $_POST['email']);

    return  Array(false, "Takk for din påmelding");

}
function verifyCaptcha(){
  
	if(isset($_POST) & !empty($_POST)){
		if($_POST['captcha'] == $_SESSION['code']){

            return true;
		}else{
            return false;
		}
    }
    return false;

}
function validateEmail($email)
{
    // SET INITIAL RETURN VARIABLES

        $emailIsValid = FALSE;

    // MAKE SURE AN EMPTY STRING WASN'T PASSED

        if (!empty($email))
        {
            // GET EMAIL PARTS

                $domain = ltrim(stristr($email, '@'), '@') . '.';
                $user   = stristr($email, '@', TRUE);

            // VALIDATE EMAIL ADDRESS

                if
                (
                    !empty($user) &&
                    !empty($domain) &&
                    checkdnsrr($domain)
                )
                {$emailIsValid = TRUE;}
        }

    // RETURN RESULT

     return $emailIsValid;
}
function getMailHeader($recipient){

    $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= "To: <$to>" . "\r\n";
    $header .= 'From: noreply@christinechjetlein.no \r\n';

    return $header;

}
function sendMailAdmin($newName, $newEmail){

    $subject = "Påmelding nyhetsbrev";
    $header = getMailHeader($newEmail);
    $msg = "Du har motatt en påmelding på nyhetsbrev


    Navn : ".$newName."
    Epost : ".$newEmail."
    
    har meldt seg på på hjemmesiden.

    Vær oppmerksom på spam og phishing forsøk, og sjekk om personen er ekte før du legger til i mailchimp
    ";

    mail("christine@schjetlein.no",$subject,$msg, $header);


}
function sendMailUser($newName, $newEmail){

    $subject = "Velkommen til nyhetsbrev";
    $header = getMailHeader($newEmail);
    $msg = "Du er påmeldt nyhetsbrevet til Christine Schetlein. Velkommen!
    
    Navn : ".$newName."
    Epost : ".$newEmail."
    
    Dersom du finner denne eposten i spam-filtered, kan du høyreklikke på avsenderadressen og legge til i listen over godkjente avsendere
    ";

   // mail("christine@schjetlein.no",$subject,$msg, $header);
    mail("jens.tandstad@gmail.com",$subject,$msg, $header);

}

?>
