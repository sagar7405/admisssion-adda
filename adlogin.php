<?php      
         $host = "localhost";  
         $user = "root";  
         $password = '';  
         $db_name = "db_admission";  
           
         $con = mysqli_connect($host, $user, $password, $db_name);  
         if(mysqli_connect_errno()) {  
             die("Failed to connect with MySQL: ". mysqli_connect_error());  
         }  

        $username = $_POST['aname'];  
        $password = $_POST['aPassword'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "SELECT * from tbl_member WHERE  name = '$username' AND Password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo "<h1><center> Login successful </center></h1>";
                header("Location: view.php");
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     
    ?>  