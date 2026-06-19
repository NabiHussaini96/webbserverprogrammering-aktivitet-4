<?php

session_start();

if (!isset($_SESSION["loggedin"]))
{
    header("Location: login.php");
    exit();
}

require_once "db.php";

$result = $conn->query(
    "SELECT * FROM messages
     ORDER BY datum DESC"
);

?>

<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meddelanden</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Sparade meddelanden</h1>

<?php

while($row = $result->fetch_assoc())
{
    echo "<div class='message-box'>";

    echo "<strong>"
    . htmlspecialchars($row["namn"])
    . "</strong>";

    echo "<p>"
    . htmlspecialchars($row["meddelande"])
    . "</p>";

    echo "<small>"
    . htmlspecialchars($row["datum"])
    . "</small>";

    echo "</div>";
}

?>

<br>

<a href="dashboard.php">
Tillbaka
</a>

</div>

</body>
</html>