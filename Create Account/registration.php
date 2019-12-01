<?php
    $dbhost = 'oniddb.cws.oregonstate.edu';
    $dbname = 'lambejoh-db';
    $dbuser = 'lambejoh-db';
    $dbpass = 'VuujWJEbf7hNieto';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($mysqli->connect_errno) {
       echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $stmt = $mysqli->prepare("INSERT INTO user (email, user_name, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $email, $username, $password);

    $email = ($_POST['email']);
    $username = ($_POST['name']);
    $password = ($_POST['password']);

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    header('Location: ../Login/login.html');

?>
