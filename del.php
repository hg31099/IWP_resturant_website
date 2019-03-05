<html>
<head>
<?php
$name = $_POST['name'];
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

$sql = "SELECT name, email FROM iwpprj1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    if(($row['email']=="$email")&&($row['name']=="$name"))
{$flag=1;
}  

}
}
if($flag==1)
{	 
mysqli_query($conn,"DELETE FROM iwpprj1 WHERE email='$email' ");
header("Location:proj_testing.php");
}

else{

echo "given email does not exist";

}
mysqli_close($conn);

?>
</head>
</html>