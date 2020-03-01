<?php
include 'dbconf.php';

if($_GET['id']) {
	$sql = "DELETE FROM `user_task` WHERE id=" . $_GET['id'];
	$conn->query($sql);
	header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
}

?>