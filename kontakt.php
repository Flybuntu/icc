<?php 
require 'nav.php'
?>

<?php

if (isset($_POST['name']) && isset($_POST["email"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $to = "phlutee@gmail.com";
  $subject = "New Subscriber";
  $body = "<html>
            <body>
              <h2>Feedback- example.com</h2>
              <hr>
              <p>Name<br>" . $name . "</p>
              <p>Email<br>" . $email . "<p>
            </body>
          </html>";
// headers
$headers = "From: " . $name . " <" . $email . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8";


//send
$send = mail($to, $subject, $body, $headers);
if($send) {
  echo "<br>";
  echo "Thanks for contacting me. I will be with you shortly.";

} else {
  echo "error";
}
}
?>

<h1 id="naslov">ICC SERVIS TOTAL</h1>


<div class="glavniBlok">
    
    <div id="kartaTekst">
    	<p>Adresa:</p> 
    	<p>Zagreb Radnicka 75</p>
    	<p>Telefon:</p>
    	<p>+385-1-444-2322</p>
    	<p>Email:</p>
    	<p>email@mail.hr</p>


  </div>
     <div id="map"></div>

    <div id="kontaktForm">
    <form action="" method="post">
      <input type="text" name="name" placeholder="Your name"><br>
      <input type="text" name="email" placeholder="Your Email"> <br>
      <input type="submit" value="Subscribe">

    </form>
  </div>






</div>
    <script>
      function initMap() {
        var uluru = {lat: 45.7995363, lng: 16.0133215};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>




    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCdVcWHA70zIPWKKOgPPRAK1XD87Gg5rs&callback=initMap">
    </script>


<?php
  require 'footer.php';

?>