<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (!preg_match("/^[a-z]+@emsi.ma$/", $_POST["email"])) {
    die("Please enter a valid emsi email!");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "/database2.php";

// Insert into cities table
$sqlCities = "INSERT INTO cities (name) VALUES (?)";
$stmtCities = $mysqli->prepare($sqlCities);

if (!$stmtCities) {
    die("SQL error: " . $mysqli->error);
}

$stmtCities->bind_param("s", $_POST["idcity"]);

if (!$stmtCities->execute()) {
    die($stmtCities->error);
}

// Get the auto-incremented ID from the cities table
$cityId = $stmtCities->insert_id;

// Close the statement for cities
$stmtCities->close();

// Insert into Clients table
$sqlClients = "INSERT INTO Clients (name, email, password_hash, idCity) VALUES (?, ?, ?, ?)";
$stmtClients = $mysqli->prepare($sqlClients);

if (!$stmtClients) {
    die("SQL error: " . $mysqli->error);
}

$stmtClients->bind_param("sssd", $_POST["name"], $_POST["email"], $password_hash, $cityId);

if ($stmtClients->execute()) {
    header("Location: signup-success.html");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("Email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

// Close the statement for clients
$stmtClients->close();

// Close the database connection
$mysqli->close();
?>
