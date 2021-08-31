<?php
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
     $query="select name from teachers where email='$email'" ;
     $res=mysqli_query($con,$query);
     $count=mysqli_fetch_row($res);
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
     <link rel="stylesheet" href="style.css">

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
 <h2>Welcome <?php echo $count[0]; ?> </h2>
 <div class="container ">
    
            <div id=t_box class="box">
             <h3>View Profile</h3>
             <i class="fas fa-id-card"></i> 
            <input type="button" value="Click Here" onclick="viewProfile()">
            </div>

            <div id=t_box class="box">
             <h3>View Results</h3>
             <i class="fas fa-graduation-cap"></i>
            <input type="button" value="Click Here" onclick="viewResults()">
    
         </div>

         <div id=t_box class="box">
             <h3>Add Results</h3>
             <i class="fas fa-graduation-cap"></i>
            <input type="button" value="Click Here" onclick="addResult()">
    
         </div>

         <div id=t_box class="box">
             <h3>Edit Results</h3>
             <i class="fas fa-graduation-cap"></i>
            <input type="button" value="Click Here" onclick="editResult()">
    
         </div>

         <div id=t_box class="box">
             <h3>Add Student</h3>
             <i class="fas fa-user-graduate"></i>
            <input type="button" value="Click Here" onclick="addStudent()">
    
         </div>

         <div id=t_box class="box">
             <h3>Delete Student</h3>
             <i class="fas fa-user-graduate"></i>
            <input type="button" value="Click Here" onclick="deleteStudent()">
         </div>
    
 </div>
</body>
</html>