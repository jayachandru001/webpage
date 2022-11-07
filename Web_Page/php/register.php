<?php
//$link = mysqli_connect("localhost", "username", "mpassword", "database") or die($link);
$host='localhost';
$dbusername='root';
$dbpassword='';
$dbname='test';

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$firstname= $_POST['firstName'];
$lastname= $_POST['lastName'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$dob= $_POST['birthDate'];
$designation = $_POST['designation'];
$address= $_POST['address'];
$username = $_POST["email"];
$password = $_POST["password"];


if (!empty($username)){
    if (!empty($password)){
            if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO  guvidb (id, email, password, firstname, lastname, gender, 
            mobile, dob, designation, address) VALUES (NULL,'$email','$password','$firstname',
            '$lastname','$gender','$mobile','$dob','$designation','$address')";

            if ($conn->query($sql)){
                echo ' Sucessfully inserted!    ';
            }
            else{
                echo 'Error: '. $sql .'
                '. $conn->error;
            }
            $conn->close();
        }
    }

    else{
        echo 'My first PHP script!';
        die();
    }
}
else{
    echo 'Username should not be empty';
    die();
}
?>

/*

   // connect to mongodb
   $client = new MongoDB\Client("mongodb://localhost:27017");
	
   echo "Connection to database successfully";
   // select a database
   $db = $client->mydb;
	
   echo "Database mydb selected";

*/