<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>User Prototype</title>
    <style>
      body{
        margin: 50px;
        
      }
    </style>
  </head>
  <body>

  <form action="userPrototype.php" method="post">

  <div class="col-4">
    <label for="student_id">Student Id</label>
    <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Student Id" aria-label="Student Id">
  </div><br>
  <div class="col-4">
    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" aria-label="First name">
  </div><br>
  <div class="col-4">
    <label for="last_name">Last name</label>
    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
  </div><br>
  <div class="col-2">
    <label for="class">Class</label>
    <input type="text" name="class" id="class" class="form-control" placeholder="Class" aria-label="Class">
  </div><br>
</div>
<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>


<br><br><br><br>
<div class="col-7" style="float:right; margin-top:-400px;">
<?php

if(isset($_POST["submit"])){

  if(isset($_POST["student_id"])){
    $student_id=$_POST["student_id"];
  }
  
  if(isset($_POST["first_name"])){
    $first_name=$_POST["first_name"];
  }

  if(isset($_POST["last_name"])){
    $last_name=$_POST["last_name"];
  }

  if(isset($_POST["class"])){
    $class=$_POST["class"];
  }

  $qry = "insert into student(student_id,first_name,last_name,class) values('$student_id','$first_name','$last_name','$class');";
  

    $servername="localhost";
    $username = "ravi";
    $password = "ravi@123";
    $dbname = "ravi";

    $con = new mysqli($servername,$username,$password,$dbname);


    $con->query($qry);


  }
   
?>

<?php 


$servername="localhost";
$username = "ravi";
$password = "ravi@123";
$dbname = "ravi";

$con = new mysqli($servername,$username,$password,$dbname);
$alt = "select * from student;";
    $result = $con->query($alt);
       echo "<table class='table table-dark table-striped'>";
       echo "<tr>";
       echo "<th>student_id</th>";
       echo "<th>frist_name</th>";
       echo "<th>last_name</th>";
       echo "<th>class</th>";
       // echo "<th>Action</th>";
       while($row = $result->fetch_array()){
       echo "<tr>";
               echo "<td>".$row['student_id']."</td>";
               echo "<td>".$row['first_name']."</td>";
               echo "<td>".$row['last_name']."</td>";
               echo "<td>".$row['class']."</td>";
               // echo "<td><button type='button' class='btn btn-danger btn-sm'>DELETE</button></td>";
       echo "</tr>";
       }
   
       // $student_id=$row['Student_id'];
   
       echo "</table>";

?>
</div>

</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>