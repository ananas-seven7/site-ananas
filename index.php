<!DOCTYPE html>
<html>
<head lang="fr">
  <title>Ananas</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
  
<body>
  <p id="ip-php" style="display: none;">
    <?php
    function getIp() {
      if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
      } else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
        $ip = $_SERVER['REMOTE_ADDR'];
      }
      return $ip;
    }
    echo getIp();
    ?>
  </p>

  <script>
    $.getJSON("https://api.ipify.org?format=json", function(data) {
      document.location.href=`./redirect.php?ip-php=${document.getElementById("ip-php").innerHTML}&ip-js=${data.ip}`;
    })
  </script>
</body>
</html>