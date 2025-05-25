<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NAZEV = trim($_POST['nazev'] ?? '');
    $POPIS = trim($_POST['popis'] ?? '');
    $STAV = ($_POST['stav']);

    if (empty($NAZEV) || empty($POPIS) || empty($STAV)) {
        echo 'Všechny hodnoty je nutné vyplnit';
    } else {

        $SQL = ('INSERT INTO Tickety (nazev, popis,datum_vytvoreni,uzivatel_id,stav_id) VALUES (?,?,?,?,?)');
        $PARAMS = array($NAZEV, $POPIS,"CURRENT_TIMESTAMP",$_SESSION['Uzivatel_id'],$STAV);
        $DB->query2($SQL, $PARAMS);


    }
}
$DB->__destruct();
header('Location: tickets_page.php');
exit();

