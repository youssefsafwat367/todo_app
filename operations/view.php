<?php
    $users = json_decode(file_get_contents('../users/users.json') , true) ;
    foreach ($users as  $user) {
            if ($_GET['id'] == $user['id']) {
                $username = $user['name'] ;
                $email = $user['email'] ;
                $gender = $user['gender'] ;
                $id = $user['id'] ;
            }
           
          }
          
          ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }
    
    .profile-card {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    
    .profile-card h1 {
      font-size: 24px;
      margin: 0;
    }
    
    .profile-card p {
      margin-top: 10px;
    }
    
    .profile-card .user-info {
      margin-top: 20px;
    }
    
    .profile-card .user-info p {
      margin-bottom: 5px;
    }
    
    .profile-card .user-info span {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <h1>Hello <?php echo $username?></h1>
    
    <div class="user-info">
    <p><span>ID: </span><?php echo $id?></p>
      <p><span>Name: </span><?php echo $username?></p>
      <p><span>Email: </span><?php echo $email?></p>
      <p><span>Gender: </span><?php echo $gender?></p>
    </div>
  </div>
</body>
</html>