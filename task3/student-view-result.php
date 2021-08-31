<?php
     require('connection.inc.php');
     require('functions.inc.php');
     $email=mysqli_real_escape_string($con,$_SESSION['USER_EMAIL']);
    
         $sql="select id from students where email='$email'";
         $res3=mysqli_query($con,$sql);
         $temp=mysqli_fetch_row($res3);
         $id=$temp[0];
         $query2="select * from examresults where studentID='$id' ";
         $res2=mysqli_query($con,$query2);
         $count2=mysqli_num_rows($res2);
         $row=mysqli_fetch_row($res2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Results</title>

    <!--Font-awseome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


     <!--my style sheet-->
      <link rel="stylesheet" href="view-result.css">
      <script src="script.js"></script>

     <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
<script>
   function studentDashboard()
{
    window.open("student_dashboard.php","_self");
   
}
</script>
 <div class="logout">
     <a href="logout.php">LogOut</a>
 </div>
 <h2>View Results</h2>   
 <div class=" profile-container">
    
    <table>
       <tr>
          <th>ExamID</th>
          <th>StudentID</th>
          <th>Class</th>
          <th>Maths</th>
          <th>Physics</th>
          <th>Chemistry</th>
          <th>Total</th>
          <th>Percentage</th>
          <?php
         
             
            if($count2>0)
            { 
                  $total=$row[3]+$row[4]+$row[5];
                  $percent=($total/360)*100;
                  $percent=round($percent,2, PHP_ROUND_HALF_UP);
                  echo "<tr><td>". $row[0] . "</td><td>". $row[1] ."</td><td>". $row[2] ."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5] . "</td></td>"
                  . "</td><td>". $total . "</td><td>". $percent . "</td><tr>";
               
            }
            else
            {
               echo 'Select an option';
            }

        
            

         ?>
       </tr>
    </table>
    <input class="btn" type="button" value="Back" onclick="studentDashboard()">
 </div>
 
</body>
</html>