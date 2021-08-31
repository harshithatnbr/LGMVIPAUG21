<?php
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
     if(isset($_POST['submit']))
    {
        $studentID=$_POST['studentID'];
        $class=$_POST['Class'];
        $marks=$_POST['new'];
        
         $query="update examresults set $class ='$marks' where studentID='$studentID'";
         if(mysqli_query($con, $query)){
            echo '<script>alert("Update Success!!!");</script>';
        } 
        else{
            echo '<script>alert("Update failed");</script>';
        } 
    }
   
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Result</title>

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
    <h2>Edit  Result</h2>    
    <form method="POST">
    
     
    <label for="studentID">StudentID</label>
     <input type="text" name="studentID" id="studentID" placeholder="studentID">
    
     <label for="Class">Select Subject to edit marks</label>

<select name="Class" id="Class">
  <option value="maths">Maths</option>
  <option value="physics">Physics</option>
  <option value="chemistry">Chemistry</option>
</select>
     

     <label for="new">Enter New Marks</label>
     <input type="number" name="new" id="new" placeholder="New Marks">

    

    <input type="submit" value="Submit" name="submit" class="submit">

    </form>
    <input class="back" type="button" value="Back" onclick="teacherDashboard()">
 </div>
</body>
</html>