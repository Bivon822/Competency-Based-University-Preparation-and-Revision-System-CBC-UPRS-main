<?php
include "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql= " SELECT * from members where Username= '$username' AND PassKey ='$password' ";
    $result=mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['Username'] === $username && $row['PassKey'] === $password) {
            header("location:admin-dashboard.php");
            exit();
        }
        else{
            
        }eader("Location:index.php?error=Incorect User name or password");
                    exit();
    }
    else{
        header("location: index.php?error=Incorect User name or password");
    }
    
  
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 0;
        width: 100%;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .message {
        text-align: center;
        margin-top: 20px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Admin Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
    
</div>

</body>
</html>
