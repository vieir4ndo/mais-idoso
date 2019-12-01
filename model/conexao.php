<?php
$servername = "localhost";
$username = "admin";
$password = "novaSenha";

// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $banco);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Não conectou com o banco";
}
?>
