<?php

// // require_once('../PHPMailer/PHPMailerAutoload.php');
// require('../PHPMailer/PHPMailerAutoload.php')
// $mail = new PHPMailer();
//
// // Précision du format (html en l'occurence) - inutile si c'est du texte brut
// $mail->IsHTML(true);
//
// // Précision de l'encodage à utiliser
// $mail->CharSet = "utf-8";
//
// // Ajout de l'expéditeur
// $mail->SetFrom('biciclet11@gmail.com', 'Ange Mondoloni');
//
// // Ajout de l'objet du mail
// $mail->Subject('Un petit test de phpMailer');
//
// // Ajout du contenu du mail
// $mail->Body='<h1>Hello woooOOOOOoooOOOOOooooOOOOOOORLD!!!!</h1> </br>
// <p>Histoire de faire un test d\'envoi de mail by PhpMailer je vais essayer un truc.</br>
// On verra bien si ça s\'affiche ou pas...</p>
// <ol><li>Le mail est bien reçu?</li>
// <li>Le contenu du mail est bien au format html?</li>
// <li>La liste ordonnée s\'affiche-t-elle?</li></ol>
// <h3>Merci!</h3>';
//
// // Ajout du ou des destinataires (ligne à dupliquer sans incrémentation)
// $mail->AddAdress('swinginlover@hotmail.com');
//
// // Envoi du mail
// $mail->Send();

require('../PHPMailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->Host = 'smtp.domaine.fr';
$mail->SMTPAuth   = false;
$mail->Port = 25; // Par défaut

// Modifier l'encodage du mail
$mail->CharSet = "utf-8";

// Expéditeur
$mail->SetFrom('swinginlover@hotmail.com', 'Ange Mondoloni');
// Destinataire(s)
$mail->AddAddress('swinginlover@hotmail.com', 'Nom Prénom');
// Objet
$mail->Subject = 'Objet du message';

// Votre message
$mail->MsgHTML('<p>Ceci est un mail de test</p>');


// Modifier l'adresse de réponse
// $mail->AddReplyTo('expediteur@example.com','Nom Prénom');

// Ajouter une pièce jointe
// $mail->AddAttachment('images/phpmailer-mini.gif');

// Reçevoir une confirmation de lecture
$mail->ConfirmReadingTo('swinginlover@hotmail.com','Nom Prénom');

// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  echo 'Erreur : ' . $mail->ErrorInfo;
} else {
  echo 'Message envoyé !';
}

 ?>
