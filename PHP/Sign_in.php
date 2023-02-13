<?php
session_start();
unset($_SESSION['suname']);
unset($_SESSION['spass']);
$uname = $_POST['User-Name'];
$pass = $_POST['Password'];
$mydb=new mysqli("localhost","root","","webbase");
if ($mydb -> connect_error) {
  echo "Failed to connect: " . $mydb -> connect_error;
}
else{
    $sql = "SELECT * FROM users WHERE UserName ='$uname' AND Pass ='$pass'";
    $count = mysqli_num_rows($mydb -> query($sql));
	if($count==1){
    $_SESSION['suname'] = $uname;
    header("Location:../Sign_in/Home_Login.html");
    session_commit();
	}
	else{ 
        echo '<script type ="text/JavaScript">';  
		echo 'alert("Incorrect Username and Password")'; 
		echo '</script>';

		echo '<script type ="text/JavaScript">';  
		echo 'window.location.href="../Local/Sign_in.html"';
		echo '</script>';

    
	}
	
}


?>