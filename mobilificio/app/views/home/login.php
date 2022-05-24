<?php
global $data
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/style_login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form method="post" action="<?=$data['base_path']; ?>/home/loginact">
  <div class="form-field">
    <input type="text" placeholder="username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" placeholder="password" required/></div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
