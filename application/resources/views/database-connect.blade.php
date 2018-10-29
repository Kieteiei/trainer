<?php 

try {
    $db_host = "localhost";
    $db_name = "trainerfreelance";
    $db_user = "root";
    $user_pw = "";

    // $db_host = "localhost";
    // $db_name = "trainerfre_lance";
    // $db_user = "trainerfre_admin";
    // $user_pw = "admin1234";
    
    $con = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);  
    $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $con->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ );
    $con->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
    $con->exec("SET CHARACTER SET utf8");
}
catch (PDOException $err) {  
    $err->getMessage() . "<br/>";
    die( $err->getMessage());
}
?>