<?php

session_start();

if (!isset($_SESSION["loggedin"]))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Dashboard</h1>

<p>Du är inloggad.</p>

<form action="save_message.php" method="post">

<label for="namn">Namn</label>
<input
    type="text"
    id="namn"
    name="namn"
    required>

<label for="meddelande">Meddelande</label>
<textarea
    id="meddelande"
    name="meddelande"
    rows="5"
    required></textarea>

<button type="submit">
Spara meddelande
</button>

</form>

<br>

<a href="messages.php">
Visa meddelanden
</a>

<br><br>

<a href="logout.php">
Logga ut
</a>

</div>

</body>
</html>