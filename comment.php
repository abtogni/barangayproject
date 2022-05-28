<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        $servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "database_name";
        $conn = mysqli_connect("localhost", "root", "", "staff");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$phone =  $_REQUEST['phone'];
		$message =  $_REQUEST['message'];
         
		 
        $sql = "INSERT INTO college  VALUES ('$name',
            '$email','$phone','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n $email\n "
                . "$phone\n $message");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>