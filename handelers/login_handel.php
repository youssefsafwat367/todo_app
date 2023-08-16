<?php
session_start() ;
include ('../cont/functions.php') ;
include ('../cont/login_validation.php') ;

$users =  json_decode(file_get_contents('../users/users.json') , true) ;


if ((sanitize($_SERVER["REQUEST_METHOD"]) && check_written($_SERVER["REQUEST_METHOD"]))) {
    foreach ($_POST as $key => $input) :
        $$key = trim($input)  ; 
    endforeach ;  
}
else{
        echo "invalid method" ;
}
    $error_for_email = [] ;  
    $error_for_password= [] ;  
    if (!required_VALIDATION($email)) {
        $error_for_email[] = "Please Write Your Email" ; 
    }
    $_SESSION['error_for_email'] = $error_for_email ; 



    if (!required_VALIDATION($password)) {
        $error_for_password[] = "Please Write Your Password" ;
    }
    $_SESSION['error_for_password'] = $error_for_password ; 
    redirect('../login_page.php') ;

    
    if (empty($error_for_email) && empty($error_for_password)) {
        foreach ($users as $index) {
                if ($email != $index['email'] or sha1($password) != $index['password']  ) {
                $error_for_email[0] = "Invalid Email"  ;  
                $error_for_password[1] = "Invalid password"  ;   
                }
                else {
                    $name = $index['name'] ;
                    $email = $index['email'] ; 
                    $_SESSION['author'] = [$name , $email] ;
                    $_SESSION['my_own_id'] =  $index['id'] ;
                    $_SESSION['my_name'] = $name ;
                    $_SESSION['my_email'] = $email ;
                    redirect("../home_page.php") ; 
                    die ;
                    }
            }
        }

$_SESSION['error_for_email'] = $error_for_email ; 
$_SESSION['error_for_password'] = $error_for_password ; 
redirect('../login_page.php') ;
die ; 




// foreach ($array as $index) {
//     foreach ($index as $value) {
        
//     }
// }


// fclose($users_file);
// $error_for_email = [] ; 
//     if(email_exist_VALIDATION($email))
//         {
//             $error_for_email = "Email Is Required"; 
//         }
//     elseif (condition) {
//         # code...
//     }
    




