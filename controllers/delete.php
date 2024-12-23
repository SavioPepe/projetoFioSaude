<?php
include(__DIR__ . '/../db/conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user");
	header('location: ../views/index.php');

?>