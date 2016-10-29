<?php
ob_start();

if(isset($_POST['send'])){
  if(!empty($_POST['email']) && !empty($_POST['ime'])){
      if(!empty($_POST['poruka'])){
        $ime = $_POST['ime'];
        $email = $_POST['email'];
        $poruka = $_POST['poruka'];
        require 'classes/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->SMTPDebug = false;
        $mail->From = "servis@dubinskopranjekrstic.rs";
        $mail->FromName = $ime;
        $mail->addAddress("office@dubinskopranjekrstic.rs", "Dubinsko Pranje Krstic");
        $mail->isHTML(true);
        $mail->Subject = "Poruka sa sajta.";
        $mail->Body = $poruka . "<br> Ime: " . $ime . "<br> Email: " . $email;
        $mail->AltBody = $poruka . " Ime: " . $ime . " Email: " . $email;
        if($mail->send()){
          header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
      }
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>