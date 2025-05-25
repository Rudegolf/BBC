<?php
include 'navbar.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<form method="post" id="TicketsCreate" action=" tickets_create.php">

    <label for="nazev">Název:</label><br>
    <input type="text" name="nazev" required size="30" maxlength="32"><br>

    <label for="popis">Popis:</label><br>
    <textarea name="popis" required maxlength="200" ></textarea><br>

    <label for="stav">Urgentnost:</label>
    <select name="stav" id="stav">
        <option value="2"> Velká </option>
        <option value="1"> Malá </option>
    </select><br>

    <input type="submit" value="Vytvořit">

</form>

