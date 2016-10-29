<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kontakt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="icon" type="image/png" href="img/icon2.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">O nama</a></li>
        <li><a href="#">Projekti</a></li>
        <li><a href="#">Cenovnik</a></li>
        <li class="active"><a href="contact.php">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div>

<div class="container">
<div class="row">
  <div id="contactInfo" class="col-sm-6">
    <h2>Kontaktirajte nas</h2>
      <p>Zakazite pozivom ili putem kontakt forme svakim radnim danom i subotom od 8h - 20h</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Beograd, Srbija</p>
      <p><span class="glyphicon glyphicon-phone"></span> +381 64 1234567</p>
  </div>
  <div class="col-sm-6">
<div id="contactForm">
  
  <form role="form" action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name='email' class="form-control" id="email" placeholder="Vas email">
    </div>
    <div class="form-group">
      <label for="ime">Vase Ime:</label>
      <input type="text" name='ime' class="form-control" id="ime" placeholder="Vase Ime">
    </div>
    <div class="form-group">
      <label for="poruka">Poruka:</label>
      <textarea name="poruka" class="form-control" rows="5" id="poruka"></textarea>
    </div>
    <input type="submit" name='send' class="btn btn-default" value="Send" >
  </form>
</div>
</div>
<?php
if(isset($_POST['send'])){
  if(!empty($_POST['email']) && !empty($_POST['ime'])){
      if(!empty($_POST['poruka'])){

        $ime = $_POST['ime'];
        $email = $_POST['email'];
        $poruka = $_POST['poruka'];
        require 'classes/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->SMTPDebug = false;
        $mail->isSMTP();
        $mail->Host = "smtp.live.com";
        $mail->SMTPAuth = true;
        $mail->Username = "mail@mail.com";
        $mail->Password = "sifra";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->From = $email;
        $mail->FromName = $ime;
        $mail->addAddress("miloskuruzovic@gmail.com", "Dubinsko Ciscenje");
        $mail->isHTML(true);
        $mail->Subject = "Poruka sa sajta.";
        $mail->Body = $poruka . "<br> Ime: " . $ime . "<br> Email: " . $email;
        $mail->AltBody = $poruka . " Ime: " . $ime . " Email: " . $email;
        if($mail->send()){
          echo "Mail je uspešno poslat";
        }
      }else{
        echo "Unesite vasu poruku!";
      }
    
    }else{
      echo "Unesite Vase ime i email!";
    }
}
?>
  </div>
</div>

<div id="mapContainer" class="container-fluid">
  <div id="googleMap" style="height:400px;width:100%;"></div>
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/gMap.js"></script>

</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
  <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</footer>

</body>
<!-- Set height and width with CSS -->


<!-- Add Google Maps -->

</html>