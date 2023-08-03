<?php
session_start();

// Check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['username']);
}

// Log in the user
function login($username) {
    $_SESSION['username'] = $username;
}

// Log out the user
function logout() {
    session_unset();
    session_destroy();
}

// Check if the user is logged in
if (isLoggedIn()) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
} else {
    echo "You are not logged in.";
}

// Perform login
login("user123");
echo "<br>";

// Check if the user is now logged in
if (isLoggedIn()) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
} else {
    echo "You are not logged in.";
}

// Perform logout
logout();
echo "<br>";

// Check if the user is now logged out
if (isLoggedIn()) {
    echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
} else {
    echo "You are not logged in.";
}
?>
