<?php  include 'php/add_task.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>todolist</title>
</head>
<body>

    <section>
        <form action="" method="post">
            <div class="task_name"><input type="text" name="task_name" required placeholder="&#8729; Название задачи"></div>
            <div class="task_descr"><textarea name="task_descr" id="" cols="30" rows="10" required placeholder="&#8729; Описание задачи"></textarea></div>
            <div class="subm"><input type="submit" value="Add task"></div>
        </form>

        <div class="all_tasks">
            <?php 
               $sql = "SELECT * FROM user_task";

               $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="task_block_wrapper">
                            

                            <h3><?php echo $row['task']; ?></h3>
                            <p><?php echo $row['descr']; ?></p>
                            <div>
                                <a href="./php/edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                                <a href="./php/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						    </div>
                            
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
        
    </section>




    <script src="js/main.js"></script>
</body>
</html>