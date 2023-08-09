<!DOCTYPE html>
<html>
<head>
  <title>Delete Account</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }
    
    .delete-form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    
    .delete-form h1 {
      font-size: 24px;
      margin: 0 0 20px;
    }
    
    .delete-form p {
      margin-bottom: 20px;
    }
    
    .delete-form button {
      background-color: #ff0000;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .delete-form button:hover {
      background-color: #cc0000;
    }
  </style>
</head>
<body>
  <div class="delete-form">
    <h1>Delete Account</h1>
    <p>Are you sure you want to delete your account? This action cannot be undone.</p>
    
    <button onclick='window.location.href="../handelers/delete_handel.php?id=<?php echo $_GET["id"] ; ?>"'> Delete Account </button>
  </div>
</body>
</html>