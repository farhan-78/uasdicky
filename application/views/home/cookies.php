<?php
  $name = 'user_akun';
  $value = 'Website';
  setcookie($name, $value, time() + (86400 * 80), '/');
  // 86400 = 1 hari
?>
<html>
  <body>
    <?php
      if (!isset($_COOKIE[$name])) {    
        echo "Cookie dipanggil '" . $name . "' belum diatur!";
      } else { 
        echo "Cookie '" . $name  . "' has been set!<br>";    
        echo "Nilai dalam cookie adalah: " . $_COOKIE[$name];
      }
    ?>
  </body>
</html>