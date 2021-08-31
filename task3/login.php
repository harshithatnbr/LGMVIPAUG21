<?php
    require('connection.inc.php');
    require('functions.inc.php');
    if(isset($_POST['submit']))
    {
        $email=get_safe_value($con,$_POST['email']);
        $password=get_safe_value($con,$_POST['password']);
    
    
    $query="select * from students where email='$email' and password= '$password'";
    $query2="select * from teachers where email='$email' and password= '$password'";
    $res2=mysqli_query($con,$query2);
    $res=mysqli_query($con,$query);
    $count=mysqli_num_rows($res);
    $count2=mysqli_num_rows($res2);
    if($count==1)
    {
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['USER_EMAIL']=$email;

        header("location:student_dashboard.php");
        die();
    }
    else if($count2==1)
    {
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['USER_EMAIL']=$email;

        header("location:teacher_dashboard.php");
        die();
    }
    else{
        echo '<script>alert("Invalid username or password")</script>';
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>

     <!--my style sheet-->
     <link rel="stylesheet" href="style.css">
     <script src="script.js"></script>

     <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container login-container">
        <h1 class="login-h1"> Login</h1>
        <form  method="POST">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" placeholder="Enter email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password" required>
            <input type="submit" value="Login" name="submit">
          
        </form>
        
    </div>
</body>
</html>