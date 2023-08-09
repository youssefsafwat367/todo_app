<?php
include "../cont/functions.php" ;
session_start() ;
    $users = json_decode(file_get_contents('../users/users.json') , true) ;
    foreach ($users as $i=> $user) {
            if ( $user['id'] == $_GET['id'] ) {
                unset($users[$i]) ;
            }
          }
          file_put_contents('../users/users.json' , json_encode($users)) ;
          redirect('../login_page.php') ;
    ?>
    