
    <?php
    include("test.php");
    
    if(isset($_POST["submit"])){
    $file = fopen("upload/formDetails.txt","a+");
    
    if(filesize("upload/formDetails.txt")>0){
        echo fread($file,filesize("upload/formDetails.txt"));
    }else{
        echo "<h1> Not a entry</h1>";
    }
    
       fclose($file);
    
    }
    