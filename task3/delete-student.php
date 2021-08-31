<?php
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
     if(isset($_POST['submit']))
    {
        $studentID=$_POST['studentID'];
        $query3="select * from students where id= '$studentID'";
        $res=mysqli_query($con,$query3);
        $arr=mysqli_fetch_row($res);
        $name=$arr[1];
        $class=$arr[2];
        $email=$arr[3];
         $query="delete from examresults where studentID= '$studentID'";
         $query2="delete from students where id= '$studentID'";
         $res2=mysqli_query($con,$query2);
         
    }
   
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>

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
    <h2>Delete Student</h2>    
    <form method="POST">
    
     
    <label for="studentID">Select StudentID</label>
     <input type="text" name="studentID" id="studentID" placeholder="studentID">
    <input type="submit" value="Delete Student" name="submit" class="submit">

    </form>
    <h3>Details of Deleted student</h3>
    <table>
       <tr>
          <th>StudentID</th>
          <th>Name</th>
          <th>Class</th>
          <th>Email</th>
          
          <?php
         if(isset($_POST['submit']))
         {
            if(mysqli_query($con,$query)&&mysqli_query($con,$query2))
            {
                echo "<tr><td>". $studentID. "</td><td>". $name ."</td><td>". $class ."</td><td>".$email."</td><tr>";
            }
            else
            {
               echo 'Please enter ID';
            }

         }
            

         ?>
       </tr>
    </table>
    <input class="back" type="button" value="Back" onclick="teacherDashboard()">
 </div>
</body>
</html>