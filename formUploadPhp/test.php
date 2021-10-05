<?php


   if(isset($_POST["submit"])){


      $profile = $_FILES["profilePicU"]["tmp_name"];
      $gender = $_POST["gender"];
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $month = $_POST["month"];
      $day = $_POST["day"];
      $year = $_POST["year"];
      $height = $_POST["height"];
      $weight = $_POST["weight"];
      $mail = $_POST["mail"];
      $reason = $_POST["reason"];
      $allergies = $_POST["allergies"];
      $otherIllness = $_POST["otherIllness"];
      $listOfOperation = $_POST["listOfOperation"];
      $currentMedicine = $_POST["currentMedicine"];
      $history = $_POST["history"];
      $checkbox ="";
      $radioAlcohol= "";
      $radioCaffeine= "";
      $radioDiet= "";
      $radioExercise= "";
      $radiosmoke = "";

      if(isset($_POST["checkbox"])){
         foreach($_POST['checkbox'] as $value){
            $checkbox .= $value.", ";
        }
         
      }

      $isMail = false;
      if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $mail)){
         $isMail = true;
     }

      if(isset($_POST["exercise"])){
         $radioExercise = $_POST["exercise"];
      }

      if(isset($_POST["diet"])){
         $radioDiet = $_POST["diet"];
      }
      
      if(isset($_POST["alcohol"])){
         $radioAlcohol = $_POST["alcohol"];
      }

      if(isset( $_POST["caffeine"])){
         $radioCaffeine = $_POST["caffeine"];
      } 

      if(isset($_POST["smoke"])){
         $radiosmoke = $_POST["smoke"];
      }

      $DOB = "$month / $day / $year";

      $des = "/var/www/html/ravi/formUploadPhp/upload/".$_FILES["profilePicU"]["name"];
     
      if($_FILES["profilePicU"]["type"] == "png"&&$_FILES["profilePicU"]["type"] == "jpeg"&&$_FILES["profilePicU"]["type"] == "jpeg"){
         move_uploaded_file($profile,$des);
      }

     
         $details = array(
               "<h2 class='display-5'> Patient : $fname </h2><hr>",
               "1. Profile Pic : $profile".time()."<br>" ,
               "2. Patient Name : $fname $lname <br>",
               "3. Patient Gender : $gender <br>",
               "4. Patient DOB : $DOB <br>",
               "5. Patient Height : $height <br>",
               "6. patient Weight : $weight <br>",
               "7. Mail id : $mail <br>",
               "8. Reason to see a doctor : $reason<br>",
               "8. List of any drug allergies : $allergies <br>",
               "10. Any diseases  : $checkbox <br>",
               "11. Other Illness : $otherIllness <br>",
               "12. Any Operations : $listOfOperation <br>",
               "13. List your current medications : $currentMedicine <br>",
               "14. Extercise : $radioExercise<br>",
               "15. Diet : $radioDiet<br>",
               "16. Alcohol Consumption : $radioAlcohol<br>","Caffeine Consumption : $radioCaffeine<br>",
               "17. Smoking : $radiosmoke <br>",
               "18. Medical History : $history<br>",
               "<br><br><hr>\n"
         );

       

docWrite("upload/formDetails.txt","a+");



  }else {
    $fname = $lname = $height = $weight = $mail = $reason = $allergies = $otherIllness = $currentMedicine = $listOfOperation  = $msgerrName =$msgerrLastName=$msgerrMail=$msgerrMedicine=$msgerrOperation
    =$msgerrOther=$msgerrReason=$msgerrWeight=$otherIllness=$msgerrHeight= $radioAlcohol=$radioCaffeine=$radioDiet=$radioExercise=$radiosmoke=$isMail=null;
  }

function docWrite($path,$mode){

   $file = fopen($path,$mode);
   fwrite($file,implode($GLOBALS["details"]));
   fclose($file);
   
  

}
 
function validate(){
   $msgerrName = $msgerrLastName = $msgerrHeight = $msgerrWeight = $msgerrMail = $msgerrReason = $msgerrAl= $msgerrOther= $msgerrOperation= $msgerrMedicine= $msgerrHistory ="";
 
   if(empty($fname)){
     $msgerrName= "Field can not be empty";
   }
   else if(empty($lname)){
     $msgerrLastName = "Field can not be empty";
   }
   else if(empty($height)){
    $msgerrHeight= "Field can not be empty";
   }
   else if(empty($weight)){
    $msgerrWeight = "Field can not be empty";
   }
   else if(empty($mail)){
    $msgerrMail = "Field can not be empty";
   }
   else if(empty($reason)){
    $msgerrReason = "Field can not be empty";
   }
   if(empty($allergies)){
   $msgerrAl = "Field can not be empty";
   }
   else if(empty($otherIllness)){
    $msgerrOther = "Field can not be empty";
   }
   else if(empty($listOfOperation)){
   $msgerrOperation = "Field can not be empty";
   } 
   else if(empty($currentMedicine)){
    $msgerrMedicine = "Field can not be empty";
   }else{
    
   echo "<script>
      alert('your form is submit');
   </script>";

   }
 
 }
?>