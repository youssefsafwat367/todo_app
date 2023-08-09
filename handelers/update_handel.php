<?php
session_start() ;
include "../cont/functions.php" ;
$users = json_decode(file_get_contents('../users/users.json') , true) ;
foreach ($users as $i => $user) {
    if ($user['id'] == $_SESSION['id']) {
        $users[$i] = array_merge($user , $_POST) ;
        // $id = $user['id'] ;
        // $name = $user['name'] ;
        // $email = $user['email'] ;
    }
}
// echo "<pre>"; 
// print_r($_POST) ;
$_SESSION['my_id'] = $id ;
$_SESSION['my_name'] = $_POST['name'] ;
$_SESSION['my_email'] = $_POST['email'] ;
file_put_contents('../users/users.json' , json_encode($users)) ;
redirect("../../home_page.php") ;



