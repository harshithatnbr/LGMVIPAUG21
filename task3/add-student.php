<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
     if(isset($_POST['submit']))
    {
       $password=randomPassword();
        $name=$_POST['name'];
        $class=$_POST['Class'];
        $address=$_POST['email'];
         $query= "INSERT INTO students( `name`,`class`,`email`,`password`) VALUES ( '$name', '$class', '$address', '$password')";
         if(mysqli_query($con, $query)){
            echo '<script>alert("Insertion Success!!!");</script>';
        } 
        else{
            echo '<script>alert("Insertion failed");</script>';
        } 
    }
   
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <!--Font-awseome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


     <!--my style sheet-->
     <link rel="stylesheet" href="view-profile.css">
    <script src="script.js"></script>
     <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

 <div class="logout">
     <a href="logout.php">LogOut</a>
 </div>
 <div class=" profile-container">
    <h2>Add Student</h2>    
    <form method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
     <label for="Class">Class</label>

<select name="Class" id="Class">
  <option value=11>Class-11</option>
  <option value=12>Class-12</option>
 
</select>
     

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Enter email">

    <input type="submit" value="Submit" name="submit" class="submit">

    </form>
    
    <input class="back" type="button" value="Back" onclick="teacherDashboard()"> -->
 </div>
</body>
</html>