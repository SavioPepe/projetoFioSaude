<?php
include(__DIR__ . '/../db/conn.php'); // Caminho corrigido para a conexão com o banco

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];

if (empty($firstname) || empty($lastname) || empty($address)) {
    die("Todos os campos são obrigatórios.");
}

$query = "INSERT INTO user (firstname, lastname, address) VALUES ('$firstname', '$lastname', '$address')";
if (mysqli_query($conn, $query)) {
    header('Location: ../views/index.php'); // Caminho ajustado
    exit;
} else {
    die("Erro ao inserir os dados: " . mysqli_error($conn));
}
?>
