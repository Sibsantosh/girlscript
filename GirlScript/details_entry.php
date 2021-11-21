<?php

$server_name="localhost";

$username="root"; $password="";

$database_name="girlscript";

$conn=mysqli_connect($server_name, $username, $password, $database_name); //now check the connection if(!$conn)

{ 
	die("Connection Failed: " mysqli_connect_error());
}

if(isset($_POST['save']))

$first_name = $_POST['name'];
$gender = $_POST['gender '];
$email = $_POST['email'];
$phone = $_POST['phone']; 
$last_name = $_POST['project'];

$sql_query = "INSERT INTO entry_details (name, gender, email, mobile, project)

VALUES ('$fname', '$gender '$email', '$phone', '$project')";

if (mysqli_query($conn, $sql_query)) 
{
echo "New Details Entry inserted successfully !";

} 
else



{

echo "Error:" . $sql . "" . mysqli_error($conn);

}

mysqli_close($conn);

?>