<?php
session_start();
session_unset();
session_destroy();
session_regenerate_id(true);
echo '<script>
          alert("Sesión cerrada correctamente");
          window.location.href="login-sis-admin.php";
          </script>';
?> 