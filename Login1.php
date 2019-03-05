<?php
$password = $_POST['pass'];
$email = $_POST['email'];
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="iwrprj1";
$flag=0;

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM iwpprj1";
$result = mysqli_query($conn, $sql) or die("error");

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {;
    if(($row['email']=="$email"))
	{
		if(($row['password']=="$password"))
		{
			$flag=1;
		}	
	}  

}
}
if($flag==1)
{ header("Location:proj_testing_login.php")	 ;
}
else {
    echo "please give correct info";
}
mysqli_close($conn);

?>