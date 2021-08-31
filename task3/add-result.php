<?php
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
     if(isset($_POST['submit']))
    {
        $examID=$_POST['examID'];
        $studentID=$_POST['studentID'];
        $class=$_POST['Class'];
        $maths=$_POST['maths'];
        $physics=$_POST['physics'];
        $chemistry=$_POST['chemistry'];
         $query= "INSERT INTO examresults (`examID`, `studentID`, `class`, `maths`, `physics`, `chemistry`) VALUES ('$examID', '$studentID', '$class', '$maths', '$physics', '$chemistry')";
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
    <title>Add Result</title>

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
    <h2>Add marks of existing student</h2>    
    <form method="POST">
    <label for="exmaID">ExmaId</label>
    <input type="text" name="examID" id="exmaID" placeholder="enter ExamID">
     
    <label for="studentID">StudentID</label>
     <input type="text" name="studentID" id="studentID" placeholder="studentID">
    
     <label for="Class">Class</label>

<select name="Class" id="Class">
  <option value=11>Class-11</option>
  <option value=12>Class-12</option>
 
</select>
     

     <label for="maths">Maths</label>
     <input type="number" name="maths" id="maths" placeholder="Maths Marks">

     <label for="physics">Physics</label>
     <input type="number" name="physics" id="physics" placeholder="Physics Marks" >

     <label for="chemistry">Chemistry</label>
     <input type="number" name="chemistry" id="chemistry" placeholder="Chemistry Marks" >

    <input type="submit" value="Submit" name="submit" class="submit">

    </form>
    <input class="back" type="button" value="Back" onclick="teacherDashboard()">
 </div>
</body>
</html>