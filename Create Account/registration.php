<html>
<body>

<?php
    $dbhost = 'oniddb.cws.oregonstate.edu';
    $dbname = 'lambejoh-db';
    $dbuser = 'lambejoh-db';
    $dbpass = 'VuujWJEbf7hNieto';

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo 'Successfully connected to database!';

    $sql = “INSERT INTO user (email, username, password) VALUES ($email, $username, $password)”;
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);


    if (mysqli_query($mysqli, $sql)){
        echo 'successfully added to the database';
    }

    $mysqli->close();
 ?>
 
</body>
</html>
