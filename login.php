<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $USERNAME = trim($_POST['email'] ?? '');
    $PASS = trim($_POST['password'] ?? '');
    // || = altgr + W
    if (empty($USERNAME) || empty($PASS)) {
        echo 'Chybné login údaje';
    } else {
        /*
         * $stmt = $conn->prepare("SELECT email FROM Uzivatel WHERE email = ?");
         * $stmt->bind_param("s",$USERNAME);
         * $stmt->execute();
         * $result = $stmt->get_result();
         */

        $SQL = ('SELECT email FROM Uzivatel WHERE email = ?');
        // $PARAMS = array("s",$USERNAME);
        $result = $DB->query($SQL, $USERNAME);

        if ($result->num_rows > 0) {
            /*
             * $stmt = $conn->prepare("SELECT heslo FROM Uzivatel WHERE email = ?");
             * $stmt -> bind_param("s", $USERNAME);
             * $stmt -> execute();
             * $result = $stmt -> get_result();
             */

            $SQL = ('SELECT heslo FROM Uzivatel WHERE email = ?');
            // $PARAMS = array("s",$USERNAME);
            $result = $DB->query($SQL, $USERNAME);

            if ($row = $result->fetch_assoc()) {
                $HASHED_PASS = $row['heslo'];
            }

            if (password_verify($PASS, $HASHED_PASS)) {
                echo 'mrdka';

                /* $stmt = $conn->prepare("SELECT id FROM Uzivatel WHERE email = ?");
                 $stmt -> bind_param("s", $USERNAME);
                 $stmt -> execute();
                 $result = $stmt -> get_result();*/

                $SQL = ('SELECT id FROM Uzivatel WHERE email = ?');
                // $PARAMS = array("s",$USERNAME);
                $result = $DB->query($SQL, $USERNAME);

                if ($row = $result->fetch_assoc()) {
                    $_SESSION['Uzivatel_id'] = $row['id'];
                    $_SESSION['email'] = $USERNAME;

                    header('Location: main_page.php');
                    exit();
                }
            } else {
                echo 'chybne udaje';
                header('Location: login_page.php');
                exit();
            }
        } else {
            echo 'chybne udaje';
            header('Location: login_page.php');
            exit();
        }
    }
}
