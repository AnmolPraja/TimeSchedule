<html>
<head>
    <title>Register Page</title>
</head>
<style>
  div {
    text-align: center;
    padding: 8px;
  } 
</style>
<body>
    <div>
    <h2>Register Page</h2>
    <form  method="post" action="register_user.php" enctype="multipart/form-data">
        <label for="person-name">Name:</label>
        <input type = "text" name="username" id="person-name"><br><br>
        <label>Email:</label>
        <input type = "email" name="email"><br><br>
        <label>Password:</label>
        <input type ="password" name="password"><br><br>
        <input type="submit">
    </form>

    </div>
</body>
</html>