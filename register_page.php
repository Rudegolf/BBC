
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<form method="post" id="RegisterForm" action=" register.php">
    <label for="fname">Jmeno:</label><br>
    <input type="text" id="fname" name="fname" required size="30" maxlength="32" placeholder="Jan" autocomplete><br>

    <label for="lname">Prijmeni:</label><br>
    <input type="text" id="lname" name="lname" required size="30" maxlength="32" placeholder="Novak"><br>

    <label for="email">E-mail:</label><br>
    <input type="text" id="email" name="email" required size="30" maxlength="32" placeholder="jan.novak@example.com"><br>

    <label for="lname">Telefoni číslo:</label><br>
    <input type="text" id="telcis" name="telcis" required size="30" maxlength="32" placeholder="+420 123 456 789"><br>

    <label for="password">Heslo:</label><br>
    <input type="password" id="password" name="password" required size="30" pattern="[A-Za-z1-9]{1-4}" placeholder="Heslo"><br>

    <input type="submit" value="Odeslat">

</form>

<form method="post" id="RegisterForm" action="login_page.php">
    <input type="submit" value="Log in">
</form>



</body>
</html>
