<?php
include 'navbar.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body id="tickety_sekce">

<ul class="Ticket_vytvorit">
    <li><a href="tickets_create_page.php" class="active" > Vytvořit ticket </a></li>
</ul>
<section class="ticket-grid">

    <a href="#" class="ticket-item" style="background-color: #141414">
        <h1>Nazev ticketu</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Natus praesentium quasi qui tenetur ullam. Doloribus hic
            molestiae velit veniam vitae!
        </p>
        <img src="test_image.jpg">
    </a>

    <a href="#" class="ticket-item" style="background-color: #380000">
        <h1>Nazev ticketu</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Natus praesentium quasi qui tenetur ullam. Doloribus hic
            molestiae velit veniam vitae!
        </p>
        <img src="test_image.jpg">
    </a>

    <a href="#" class="ticket-item" style="background-color: #808080">
        <h1>Nazev ticketu</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Natus praesentium quasi qui tenetur ullam. Doloribus hic
            molestiae velit veniam vitae!
        </p>
        <img src="test_image.jpg">
    </a>

    <a href="#" class="ticket-item" style="background-color: #8B0000">
        <h1>Nazev ticketu</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Natus praesentium quasi qui tenetur ullam. Doloribus hic
            molestiae velit veniam vitae!

        </p>
        <img src="test_image.jpg">
    </a>


</section>
</body>

</html>
