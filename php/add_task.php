<?php 
	include "dbconf.php";

    // $task = $_POST['task_name'];
    // $descr = $_POST['task_descr'];
    
    if (isset($_POST['task_name']) && isset($_POST['task_descr'])) {
        $sql = "INSERT INTO user_task (task, descr) VALUES ('". $_POST['task_name'] . "', '" . $_POST['task_descr'] . "');";

    $result = $conn -> query($sql);

    }
    //header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
?>


