<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<form method="post" id="LoginForm" action=" login.php ">
    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email" required size="30" maxlength="32" placeholder="jan.novak@example.com"><br>

    <label for="lname">Heslo:</label><br>
    <input type="password" id="password" name="password" required size="30" pattern="[A-Za-z1-9]{1-4}" placeholder="Heslo"><br>

    <input type="submit" value="Odeslat">

</form>

<form method="post" id="LoginForm" action="register_page.php">
    <input type="submit" value="Registrovat">
</form>


</body>
</html>
