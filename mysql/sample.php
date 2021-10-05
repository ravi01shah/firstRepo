<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>DB Table</title>
  </head>
  <style>
      body{
          margin: 50px;
      }
  </style>
  <body>
  
      <?php

    $servername="localhost";
    $username = "ravi";
    $password = "ravi@123";
    $dbname = "ravi";

    $con = new mysqli($servername,$username,$password,$dbname);
    $alt = "select * from student;";
    $result = $con->query($alt);

    
   
    
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
        while($row = $result->fetch_array()){
        echo "<tr>";
                echo "<td>".$row['student_id']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['class']."</td>";
        echo "</tr>";
        }
        echo "</table>";
    


?>
    
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>