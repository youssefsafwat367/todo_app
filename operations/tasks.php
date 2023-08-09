<?php
session_start() ;
$tasks = json_decode(file_get_contents('../users/task.json') , true) ;
$id = $_SESSION['id'] ;

?>
<!DOCTYPE html>
<html>
<head>
  <title>Task Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }
    
    .task-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    
    .task {
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .task h3 {
      margin: 0;
    }
    
    .task-buttons {
      margin-top: 10px;
    }
    
    .task-buttons button {
      margin-right: 10px;
      background-color: #4CAF50;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .task-buttons button.update {
      background-color: #2196F3;
    }
    
    .task-buttons button.delete {
      background-color: #FF0000;
    }
    
    .create-task {
      margin-bottom: 20px;
    }
    
    .create-task input[type="text"] {
      width: 300px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .create-task button {
      background-color: #4CAF50;
      color: #fff;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    #task-input{
        margin-left: 80px;
    }
    
  </style>
</head>

<body>
  <div class="task-container">
    
    <form action="../handelers/tasks_handel.php" method="post">
    <div class="create-task">
      <input type="text" id="task-input" placeholder="Enter task name" name="task">
      <button >Create Task</button>
    </div>
    </form>
    <?php 
        foreach ($tasks as $index) :
            if ($index['id'] == $_SESSION['my_own_id'] ) :
    ?>
    <div class="task">
      <h3> <?php  echo $index['task'] ?></h3>
      <div class="task-buttons">
        <button class="delete" onclick='window.location.href="../handelers/delete_task_handel.php?task=<?php echo $index["task"] ; ?>"' >Delete</button>
      </div>
    </div>
    <?php
    endif; 
    endforeach;?>
    


</body>
</html>