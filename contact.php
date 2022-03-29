<?php
     //my sqli
     $servername="localhost";
     $user="root";
     $pass="";
     $database="Ronald";
     $conn= new mysqli($servername,$user,$pass,$database);
     if($conn->error){
         echo "DB error ".$conn->error."";
     }
     else{
         echo "Connection successful";
     }
     
     if(isset ($_POST['send'])){
         
         echo "<br>";
     
         $uname = $_POST['name'];
         $mail = $_POST['email'];
         $mess = $_POST['message'];
         
         
         $sql = "insert into contact (Name,Email,Message) values ('$uname','$mail','$mess')";
         
         if($conn->query($sql)){
             echo"Message sent successfully!";
         }
         else{
             echo"Error is here: ".$Conn->error;
         }
     }
     
     if(isset($_POST['display'])){
     
     
         $sql = "select * from contact";
     
         $myquery = $conn->query($sql);
         
         while($result = $myquery->fetch_assoc()){
             echo "<br>";
             echo $result['Name']." ".$result['Email']." ".$result['Message'];
             echo "<br>";
         }
     
         // echo "<br>";
         // echo "Showing data";
     }
     ?>