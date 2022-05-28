<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Comment page</title>
</head>
 
<body>
    <center>
        <?php
 
        $servername = "sql102.epizy.com";
		$username = "epiz_31791775";
		$password = "fpPqwtJ4JaHhr";
		$dbname = "epiz_31791775_comment_box";
        $conn = mysqli_connect("sql102.epizy.com", "epiz_31791775", "fpPqwtJ4JaHhr", "epiz_31791775_comment_box");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$phone =  $_REQUEST['phone'];
		$message =  $_REQUEST['message'];
         
		 
        $sql = "INSERT INTO comment VALUES ('$name',
            '$email','$phone','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>";
 
            echo nl2br("\n$name\n $email\n "
                . "$phone\n $message");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
		    $url='contact.html';
			echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
		 
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>