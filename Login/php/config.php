<?php
   define('DB_SERVER', 'oniddb.cws.oregonstate.edu');
   define('DB_USERNAME', 'lambejoh-db');
   define('DB_PASSWORD', 'VuujWJEbf7hNieto');
   define('DB_DATABASE', 'lambejoh-db');

   $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($db->connect_errno) {
      echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
   }
?>
