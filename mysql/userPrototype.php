<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>User Prototype</title>
  <style>
    body {
      margin: 50px; 
    }
    
  </style>
</head>

<body>

  <div class="add_student">
    <h4 class="display-6"><u>Add student</u></h4>
    <form action="userPrototype.php" method="post">
      <!-- <div class="col-4" id="add_student">
        <label for="student_id">Student Id</label>
        <input type="text" name="student_id" id="student_id" class="form-control" placeholder="Student Id"
          aria-label="Student Id">
          <span style="color:red;" id="student_id_err"></span>
      </div><br> -->
      <div class="col-4">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name"
          aria-label="First name">
          <span style="color:red;" id="first_name_err"></span>
      </div><br>
      <div class="col-4">
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name"
          aria-label="Last name">
          <span style="color:red;" id="last_name_err"></span>
      </div><br>
      <div class="col-4">
        <label for="class">email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com"
          aria-label="eg:-example@example.com">
          <span style="color:red;" id="email_err"></span>
      </div><br>
      <div class="col-4">
        <label for="class">date_registered</label>
        <input type="text" name="date_registered" id="date_registered" class="form-control"
          placeholder="date_registered" aria-label="date_registered">
          <span style="color:red;" id="deta_registered_err"></span>
      </div><br>
      <button type="submit" name="add" id="add" class="btn btn-primary">Submit</button>
    </form>
  </div><br><br><br>

  <div class="col-4" id="delete_student">
  <h4 class="display-6"><u>Delete student</u></h4>
    <form action="userPrototype.php" method="post">
      <label for="dlt_id">Enter student id for delete student record</label><br>
      <input type="text" name="delete_student" id="dlt_id" class="form-control" placeholder="Enter student_id"><br>
      <span style="color:red;" id="dlt_id_err"></span>
      <button type="submit" name="delete" id="delete" class="btn btn-primary">Delete</button>
    </form><br>
  </div>

  <div class="col-4">
    <span>Delete All student record</span>
    <form action="userPrototype.php" method = "post">
      <button type="submit" name="dltAll" id="dltAll" class="btn btn-primary">Delete All</button>
    </form>
  </div><br><br><br>

  <div class="edit_student">
  <h4 class="display-6"><u>Update student</u></h4>
    <form action="userPrototype.php" method="post">
      <div class="col-4">
        <label for="update_field">Set field</label>
      <input type="text" name="update_field" id="update_field" class="form-control" placeholder="eg:-first_name">
      <span style="color:red;" id="update_field_err"></span>
      </div><br>
      <div class="col-4">
        <label for="update_value">value</label>
      <input type="text" name="update_value" id="update_value" class="form-control" placeholder="value">
      <span style="color:red;" id="update_value_err"></span>
      </div><br>
      <div class="col-4">
        <label for="where_student_id">Where student_id</label>
      <input type="text" name="where_student_id" id="where_student_id" class="form-control" placeholder="eg:-enter_student_id">
      <span style="color:red;" id="where_student_id_err"></span>
      </div><br>
      <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
    </form>
  </div>
    
<?php include "querys.php"; ?>

<div class="col-7" style="float:right; margin-top:-1000px;">
  <?php 
  $servername="localhost";
  $username = "ravi";
  $password = "ravi@123";
  $dbname = "school";

  $con = new mysqli($servername,$username,$password,$dbname);
  $qry = "select student_id,first_name,last_name,email,date_registered from students;";
    $result = $con->query($qry);

       echo "<table class='table table-dark table-striped'>";
       echo "<tr>";
       echo "<th>student_id</th>";
       echo "<th>frist_name</th>";
       echo "<th>last_name</th>";
       echo "<th>email</th>";
       echo "<th>date_registered</th>";
       // echo "<th>Action</th>";
       while($row = $result->fetch_array()){
       echo "<tr>";
               echo "<td>".$row['student_id']."</td>";
               echo "<td>".$row['first_name']."</td>";
               echo "<td>".$row['last_name']."</td>";
               echo "<td>".$row['email']."</td>";
               echo "<td>".$row['date_registered']."</td>";
               // echo "<td><button type='button' class='btn btn-danger btn-sm'>DELETE</button></td>";
       echo "</tr>";
       }
       echo "</table>";
  ?>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>


</body>

</html>