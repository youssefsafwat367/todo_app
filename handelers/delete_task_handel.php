<?php
include "../cont/functions.php" ;
session_start() ;
    $tasks = json_decode(file_get_contents('../users/task.json') , true) ;
    foreach ($tasks as $i=> $index) {
            if ( $index['task'] == $_GET['task'] &&  $index['id'] == $_SESSION['my_own_id']  ) {
                unset($tasks[$i]) ;
            }
          }
        //   echo"<pre>" ;
        //   print_r($tasks) ;
          file_put_contents('../users/task.json' , json_encode($tasks)) ;
          redirect('../operations/tasks.php') ;
    ?>
