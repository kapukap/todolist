<?php 

    include 'dbconf.php';

    if(isset($_GET['id'])) {
        $sql = "SELECT * FROM user_task WHERE id='" . $_GET['id'] . "'";
        $result = $conn->query($sql);
        if($result->num_rows == 0) {
            echo "Task not found! <a href='../index.php'>Tasks</a>";
            die();
        } 
        $tasks_res = $result->fetch_assoc();
    }


    if(isset($_POST['task_name']) && isset($_POST['task_descr']) ) {
        $id = $_POST['id'];
        $task = $_POST['task_name'];
        $descr = $_POST['task_descr'];
        
        $sql = "UPDATE user_task SET task='$task', descr='$descr' WHERE id='$id'";
        $result = $conn->query($sql);
        if($result) {
            echo "TASK INFO UPDATED.<br/> <a href='../index.php'>Back to Main page</a>";
        }
    }

?>



<html>
<head>
  <title>Edit Task</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<secion>
        <form method="post" action="edit.php?id=<?php echo $tasks_res['id']; ?>" >
            <input type="text" name="task_name" value="<?php echo $tasks_res['task']; ?>">
            <textarea name="task_descr">  <?php echo $tasks_res['descr']; ?> </textarea>
            <button>Update</button>
            
        </form>

  	
</secion>
</body>
</html>