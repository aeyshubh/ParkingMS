<?php
session_start();

$servername = "localhost";
$username = "moksha";
$password = "Moksha@22";
$dbname = "Parking System";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
if ($conn) 
{
  /*  echo "Connection Established<br>";
*/

/* Use once for the first time 
// sql to create table
$sql = "CREATE TABLE User (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
u_name VARCHAR(30) NOT NULL,
p_number VARCHAR(10) NOT NULL,
email VARCHAR(50),
address VARCHAR(50),
password VARCHAR(15),
gender VARCHAR(6),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) 
{
  echo "Table User created successfully";
}
else 
{
  echo "Error creating table: " . $conn->error;
}
*/


	$uname=$_POST['uname'];
	$pno=$_POST['pno'];
	$email=$_POST['email'];
	$add=$_POST['add'];
	$psw=$_POST['psw'];
	$cpsw=$_POST['cpsw'];
	$gen=$_POST['gen'];
	
	/* echo "Gender : ".$gen;
	echo ("Welcome!!...".$uname);
	 */
	$sql = "INSERT INTO User (u_name, p_number, email, address, password, gender)
		VALUES('$uname','$pno','$email','$add','$psw','$gen')";
/* 
		if (mysqli_query($conn,$sql) === TRUE) {
		  echo "<br>New record inserted successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		} */

/* 
		$sql = "SELECT name, passward FROM user";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "Name: " . $row["name"]. " - Password: " . $row["password"]. "<br>";
			}
		} else {
			echo "0 results";
		}
 */		
		mysqli_close($conn);
	}

?>

