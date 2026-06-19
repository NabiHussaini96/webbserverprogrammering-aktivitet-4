<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "aktivitet4_db"
);

if ($conn->connect_error)
{
    die("Databasanslutningen misslyckades: " . $conn->connect_error);
}
?>