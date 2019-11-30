<!-- source: https://www.simplifiedcoding.net/php-mysql-insert-into-database-tutorial/ -->
<?php
    define('HOST','oniddb.cws.oregonstate.edu');
    define('USERNAME', 'lambejoh-db');
    define('PASSWORD','VuujWJEbf7hNieto');
    define('DB','lambejoh-db');

    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DB);

    $sql = “INSERT INTO user (email, username, password) VALUES ($email, $username, $password)”;
    $email = $_POST['email'];
    $username = $_POST['name'];
    $password = $_POST['password'];

    if (mysqli_query($con, $sql)){
        echo 'success';
    }
 ?>
