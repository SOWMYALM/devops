        else {<?php
$mysqli=new mysqli("localhost","root");
mysqli_select_db($mysqli,'gmrIT');
if(isset($_POST["username"], $_POST["password"])) 
    {             $name = $_POST["username"]; 
        $password = $_POST["password"];         
       if($result =mysqli_query($mysqli,"SELECT uname FROM student WHERE uname = '$name' and password = '$password'"))
       {        
        $count = $result->num_rows;
        echo $count;
       }        
      //  If result matched $myusername and $mypassword, table row must be 1 row          
       if($count == 1) {           
          header("location: frame.html");   
     }    

           $error = "Your Login Name or Password is invalid";
        }      }
      else{
      echo "error";
      }   }
$mysqli->close();
?>
