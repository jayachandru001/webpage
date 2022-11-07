<?php      
    $host='localhost';
    $dbusername='root';
    $dbpassword='';
    $dbname='test';
    
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname); 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection   
      
        $sql = "select *from guvidb where email = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  