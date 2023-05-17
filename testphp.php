<?php
if(isset($_POST['submit'])){
  $meno = $_POST['meno'];
  $priezvisko = $_POST['priezvisko'];
  $tel_cislo = $_POST['tel_cislo'];
  $mail = $_POST['mail'];
  $sprava = $_POST['sprava'];

  $to = 'lovicfilip@gmail.com';
  $subject = 'Nová správa od zákazníka';
  $message = "Meno: $meno\n\nPriezvisko: $priezvisko\n\nTel. číslo: $tel_cislo\n\nE-mail: $mail\n\nSpráva: $sprava";
  $headers = "From: $mail";

  if(mail($to, $subject, $message, $headers)){
    echo 'Správa bola úspešne odoslaná.';
  } else{
    echo 'Pri odosielaní správy sa vyskytla chyba.';
  }
}
?>