<?php

session_start();

if (!isset($_SESSION["loggedin"]))
{
    header("Location: login.php");
    exit();
}

require_once "db.php";

$namn = trim($_POST["namn"]);
$meddelande = trim($_POST["meddelande"]);

if(empty($namn) || empty($meddelande))
{
    die("Alla fält måste fyllas i.");
}

$stmt = $conn->prepare(
    "INSERT INTO messages (namn, meddelande)
     VALUES (?, ?)"
);

$stmt->bind_param(
    "ss",
    $namn,
    $meddelande
);

$stmt->execute();

$stmt->close();

header("Location: messages.php");
exit();

?>