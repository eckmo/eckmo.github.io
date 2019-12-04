<?php
  session_start();
  unset($_SESSION); //this may not be necessary as unset is said to be depreciated
  session_destroy();
  header('Location: ../../index.html');
  exit;
 ?>
