<?php
$servername = "localhost";
$username = "FrankHesse";
$password = "proveneet";
$dbname = "proveneet";

$conn = new mysqli($servername, $username, $password, $dbname);

$code = $_POST['code'];

$sql = "DELETE FROM products WHERE Codigo = '$code'"; 

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado de manera exitosa";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>