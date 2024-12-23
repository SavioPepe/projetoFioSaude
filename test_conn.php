<?php
include './db/conn.php';

if ($conn) {
    echo "Conexão bem-sucedida ao banco de dados!";
} else {
    echo "Erro ao conectar: " . mysqli_connect_error();
}
?>

