<?php  
include "connect_to_mysqli.php";
	  if     (isset( $_POST['old'])){
		    $changepass = $_POST['old'];
			$npass = $_POST['new'];
			$confirmp = $_POST['renew'];
	         
	  $usid = '_admin';
	  
	 $sql = "SELECT * from mat where username = '".$usid."'" ;
		  $sql2 = mysqli_query($connection,$sql);
	  
		       while ($row = mysqli_fetch_array($sql2))
		          {
			           $d_pass = $row['password'];
			         if($changepass != $d_pass)
			            {  
        				   echo'<center style="color:red;">Incorrect Password</center>
						   ' ;
							
		            	}
						else if (strlen($npass) < 6)
						{
						echo 'Password must have 8 or more characters';
						}
						elseif($npass != $confirmp)
						{
						
        				   echo '<center style="color:red;">Password does not match</center>';
							
						}
		        	 else
            			{
			                $insert = mysqli_query($connection,"UPDATE mat SET password= '$npass' where  username ='$usid'") or die ('Could not connect: ' .mysqli_error($connection)); 
	
                       
                         echo '<span style="color:green;">Password Changed Successfully!</span>';
							 	
			            }
		          }
		  
			
			 
	  }
	  
	  
	  ?>