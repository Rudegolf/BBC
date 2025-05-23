<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "db_conn.php";



if($_SERVER["REQUEST_METHOD"]=="POST"){

    $FNAME = trim($_POST["fname"] ?? '');
    $LNAME = trim($_POST["lname"] ?? '');
    $EMAIL = trim($_POST["email"] ?? '');
    $TELCIS = trim($_POST["telcis"] ?? '');
    $PASSWORD = trim($_POST["password"] ?? '');

    if(empty($FNAME) || empty($LNAME) || empty($EMAIL) || empty($TELCIS) || empty($PASSWORD)){
        echo "Všechny hodnoty je nutné vyplnit";
    }else{
        $HASH_PASS = password_hash($PASSWORD, PASSWORD_DEFAULT);

        $SQL = ("INSERT INTO Uzivatel (jmeno, prijmeni,email,heslo,telefon,role_id) VALUES (?,?,?,?,?,?)");
        $PARAMS = array($FNAME, $LNAME,$EMAIL,$HASH_PASS, $TELCIS, 2);
        $DB->query($SQL,$PARAMS);

        /*
        $STMT = $conn->prepare("INSERT INTO Uzivatel (jmeno, prijmeni,email,heslo,telefon,role_id) VALUES (?,?,?,?,?,1)");
        $STMT->bind_param("sssss", $FNAME, $LNAME,$EMAIL,$HASH_PASS, $TELCIS);


        if($DB->execute()){
            echo "Funguje :)";
        }else{
            echo "Error: " . $DB->error;
        }
        $DB->close();
        */
    }
}
$DB->__destruct();
header("Location: login_page.php");
exit();


