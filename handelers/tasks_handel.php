<?php
session_start() ;
include '../cont/functions.php' ;
$users = json_decode(file_get_contents('../users/users.json') , true) ;
$tasks = json_decode(file_get_contents('../users/task.json') , true) ;
$id = $_SESSION['my_own_id'] ;
foreach ($users as $user){
    if ($user['id'] == $_SESSION['my_own_id']) {
        if (($_POST['task']== null || $_POST['task'] == '')) {
            echo "you should enter a task" ;
            die(); 
        }
         else {
           
            $task = $_POST['task'] ;
         }
    }
}
$tasks[] = 
[  'id'=> $id  , 
   'task'=> $task ] ; 
   echo "<pre>" ;
file_put_contents('../users/task.json' , json_encode($tasks)) ;
redirect('../operations/tasks.php');
?>