 <?php
include "connect_to_mysqli.php";
session_start();

if (isset( $_POST['submit'])){
$id = $_POST['id'];
}

$s="";
if ( $id != "$id")
{
echo "<br><br>";
echo "<center><font color='red'>please enter your Registration Number or password</font></center>";
echo "<h3 align='center'><a href='for.php'>Continue</a></h3>";
}

else 
{
$sqli = "SELECT * from ject where  id = '".$id."'";
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
	$id = $row["id"];
$name=$row['name'];
$email=$row['email'];
$tele=$row['tele'];
$course=$row['course'];


}




header("location:view.php");
}


}






?>
