<p style="display: none;">
  <?php
  function sender($message) {
    echo $message
  }
  if($_GET['ip-php'] && $_GET['ip-js']) {
    sender('ip-php: ' . $_GET['ip-php'] . '<br>ip-js: ' . $_GET['ip-js']);
  } else if($_GET['ip-php']) {
    sender('ip-php: ' . $_GET['ip-php']);
  } else if($_GET['ip-js']) {
    sender('ip-js: ' . $_GET['ip-js']);
  }
  $domaine = $_SERVER['SERVER_NAME'];
  echo '<br><br>Location: https://' . $domaine . '/page/index.php<br><br>';
  if($_GET['redirect']) {
    header('Location: https://' . $domaine . $_GET['redirect']);
  } else {
    header('Location: https://' . $domaine . '/page/index.php');
  }
  ?>
</p>
