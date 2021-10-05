<?php
    if(isset($_POST["add"])){
        add();
    }
    if(isset($_POST["delete"])){
        delete();
    }
    if(isset($_POST["dltAll"])){
      trunk();
    }
    if(isset($_POST["update"])){
        update();
    }

function add(){
        // if(isset($_POST["student_id"])){
        //     $student_id=$_POST["student_id"];
        //   }
          
          if(isset($_POST["first_name"])){
            $first_name=$_POST["first_name"];
          }
        
          if(isset($_POST["last_name"])){
            $last_name=$_POST["last_name"];
          }
        
          if(isset($_POST["email"])){
            $email=$_POST["email"];
          }
          if(isset($_POST["date_registered"])){
            $date_registered=$_POST["date_registered"];
          }
         
          if($first_name !== "" && $last_name !== "" && $email !== "" && $date_registered !== ""){

          $qry = "insert into students(first_name,last_name,email,date_registered) values('$first_name','$last_name','$email','$date_registered');";

          connect($qry);
          
          }
          
}
function delete(){
    if(isset($_POST["delete_student"])){
        $delete_student=$_POST["delete_student"];
      }
    
      $dlt = "delete from students where student_id = '$delete_student';";

      connect($dlt);
}

function update(){
    if(isset($_POST["update_field"])){
        $update_field = $_POST["update_field"];
    }
    if(isset($_POST["update_value"])){
        $update_value = $_POST["update_value"];
    }
    if(isset($_POST["where_student_id"])){
        $where_student_id = $_POST["where_student_id"];
    }

$update = "update students set ".$update_field." = '$update_value' where student_id = '$where_student_id'";

connect($update);
}

function trunk(){
  $trun = "TRUNCATE TABLE students;";
      connect($trun);
}

function connect($qry){
    $servername="localhost";
    $username = "ravi";
    $password = "ravi@123";
    $dbname = "school";

    $con = new mysqli($servername,$username,$password,$dbname);
    $con->query($qry);
}
    