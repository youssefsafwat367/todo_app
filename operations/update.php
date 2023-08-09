<?php
session_start() ;
    $users = json_decode(file_get_contents('../users/users.json') , true) ;
    foreach ($users as  $user) {
            if ($_GET['id'] == $user['id']) {
                $username = $user['name'] ;
                $email = $user['email'] ;
                $gender = $user['gender'] ;
                $id = $user['id'] ;
                $password = $user['password'] ; 
            }
           
          }
          $_SESSION['id'] = $id ;
          // echo "<pre>" ;
          // print_r($user) ;
    ?>
    
<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }
    
    .update-form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    
    .update-form h1 {
      font-size: 24px;
      margin: 0 0 20px;
    }
    
    .update-form input[type="text"],
    .update-form input[type="email"],
    .update-form input[type="password"],
    .update-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .update-form input[type="file"] {
      margin-top: 10px;
    }
    
    .update-form button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .update-form button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="update-form">
    <h1>Update Profile</h1>
    
    <form action="../handelers//update_handel.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo $username?>" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php echo $email?>" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" value="<?php echo $password ?>" required>
      
      <label for="gender">Gender:</label>
      <select id="gender" name="gender"  required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      
      
      <button type="submit" style ="margin-left : 150px ;">Update</button>
    </form>
  </div>
</body>
</html>