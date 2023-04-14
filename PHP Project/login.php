<html>
<head>
    <title>Login Page</title>
</head>
<style>
  div {
    text-align: center;
    padding: 8px;
  } 
</style>
<body>
  <div>
  <h2>Login Page</h2>
  <form method="post" action="check_login.php" enctype="multipart/form-data">
    <label>Email:</label>
    <input type = "email" name="email"><br><br>
    <label>Password:</label>
    <input type ="password" name="password"><br><br>
    <input type="submit">
  </form>

  </div>
</body>
</html>