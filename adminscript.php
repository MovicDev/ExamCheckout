 <?php
include "connect_to_mysqli.php";

if (isset( $_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
}

$id="";
if ($username != "$username" || $password != "$password")
{
echo "<br><br>";
echo "<center><font color='red'>please enter your Registration Number or password</font></center>";
echo "<h3 align='center'><a href='for.php'>Continue</a></h3>";
}

else 
{
$sqli = "SELECT * from mat where username = '".$username."' && password = '".$password."'";
$sqli2 = mysqli_query($connection,$sqli);

if (mysqli_affected_rows($connection)== 0)
{
	
echo "<br><br>"; 
echo "<center><font color='red'>please you are not a valid user</font></center>";
echo "<center> Please contact our administrator</center>";
echo "<center><a href = 'index.php' class='black' style='text-decoration:none'>Try Again</a></center>";

} 
else 
{
while($row = mysqli_fetch_array($sqli2))

{
$id = $row["s"]; 
$username=$row['username'];
$password=$row['password'];



}




header("location:data/index.php");
}


}






?>
