<?php include "inc/header.php";?> 
<?php
include_once('lib/Database.php');
include_once('config/config.php');

$db1 = new Database();
$db = $db1->link;

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['body']))
{
	$fname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lname = mysqli_real_escape_string($db,$_POST['lastname']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$body = mysqli_real_escape_string($db,$_POST['body']);

	if (mysqli_query($db, "INSERT INTO `tbl_contact` (`firstname`, `lastname`, `email`, `body`, `status`) VALUES ('$fname', '$lname', '$email', '$body', '1')"))
		echo "successfully inserted";
	else
		echo "failed";
}



?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name" required="1"/>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" required="1"/>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="email" name="email" placeholder="Enter Email Address" required="1"/>
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit"/>
					</td>
				</tr>
		</table>
	<form>				
 </div>

		</div>
		
			
		</div>
	</div>

<?php include "inc/footer.php";?>
</body>
</html>