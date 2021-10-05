<?php   

    $servername="localhost";
    $username = "ravi";
    $password = "ravi@123";
    $dbname = "ravi";

    $con = new mysqli($servername,$username,$password,$dbname);

    // Check connection
    if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
    }

    // to insert the data into the table;
    $sql = "INSERT INTO student (first_name, last_name, class) VALUES ('rahul', 'pinchu', '9th');";

$con->query($sql);

// modify the table columns eg: add delete and change the data types also;
    // $alt = "alter table student add column email varchar(255);";
    // $alt = "alter table student drop column email;";

// to rename table ;
// $alt = "rename table student to student1;";

// to update the values in column we use ;
// update student set first_name = "name" where student_id = 1;

// select the data from the table
// $alt = "select * from student;";
//     $result = $con->query($alt);

//     echo "<table border=1px; style='border-left :none; border-right:none; margin:10px; padding :10px;'>";
//     echo "<tr>";
//     echo "<th>frist_name</th>";
//     echo "<th>last_name</th>";
//     echo "<th>class</th>";
//     while($row = $result->fetch_array()){
//     echo "<tr>";
//             echo "<td>".$row['first_name']."</td>";
//             echo "<td>".$row['last_name']."</td>";
//             echo "<td>".$row['class']."</td>";
//     echo "</tr>";
// }
// echo "</table>";

// return a message through this if statement;
    // if ($con->query($sql) === TRUE) {
    //  echo "New record created successfully";
    // } else {
    //  echo "Error: " . $sql . "<br>" . $con->error;
    // }

    $con->close();



