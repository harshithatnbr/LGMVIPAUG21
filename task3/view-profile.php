<?php
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
     $query="select * from teachers where email='$email'" ;
     $res=mysqli_query($con,$query);
     $count=mysqli_num_rows($res);
     $query2="select * from students where email='$email'" ;
     $res2=mysqli_query($con,$query2);
     $count2=mysqli_num_rows($res2);
     if($count==1)
     {
        $var="Subject";
        $arr=mysqli_fetch_row($res);
     }
     else if($count2==1)
     {
        $var="Class";
        $arr=mysqli_fetch_row($res2);
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!--Font-awseome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


     <!--my style sheet-->
     <link rel="stylesheet" href="view-profile.css">

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
    <h2>My Profile</h2>    
    <form >
    <label for="name">Id</label>
    <input type="text" name="id" id="Id" value="<?php echo $arr[0]; ?>">
     
    <label for="name">Name</label>
     <input type="text" name="name" id="name" value="<?php echo $arr[1]; ?>">
    
     <label for="name"><?php echo $var ?></label>
     <input type="text" name="subject" id="subject" value="<?php echo $arr[2]; ?>">

     <label for="name">Email Address</label>
     <input type="text" name="subject" id="subject" value="<?php echo $arr[3]; ?>">
    </form>
    
 </div>
</body>
</html>