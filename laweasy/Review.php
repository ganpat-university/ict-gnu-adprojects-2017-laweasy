<html>
	<head>
		<title>Review</title>
		<link rel="stylesheet" src="text/css" href="registerComp.css">
		<style>
		body {
			background-color:brown;
		}
		</style>
	</head>
	<body>
		
		<div>
			<form method="POST" action="">

				<fieldset style="width:450px;height:auto;margin:auto;margin-top:85px;border-radius:4px;">
					<legend align="center"><b>Reveiw </legend>
				
					<br />
						
						<table style="margin:0 auto;">
							<tr>
								<td colspan="2">Lawyer Name : </td>
								<td colspan="2"><input type="text" name="name" placeholder="" pattern="[A-Za-z ]+" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
							<td colspan="2">rating : </td>
								<td colspan="2">    
									<select name="rating">
										<option value="" disabled selected>Rating</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
												
									</select>
								</td>
							</tr>
							<tr><td><br/></td></tr>
						
							<tr>
								<td colspan="2">Message : </td>
									<td colspan="2"><input type="message" placeholder="message" style="width:100%;" name="message" required></td>
							</tr>
							<tr><td><br/></td></tr>
							
							
							<tr align="center">
								<td colspan="4" align="center"><input type="submit" name="submit" id="btn" value="Submit"></td>
							</tr>
						</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>

<?php
	
	function AddCompanyRegistrationData()
	{
		require 'Connection.php';
		$name = $_POST['name'];
		$rating = $_POST['rating'];
		$message = $_POST['message'];
		

		
		
		
			$sql = "INSERT INTO review(Name,rating,message)
				VALUES ('$name','$rating','$message')";
				
				if ($con->query($sql) === TRUE) {

				}
				else{
					echo 'Error!';
				}
		
		
	}
	if(isset($_POST['submit']))
	{
		echo '<br>thank you for your review.</br>';
		AddCompanyRegistrationData();
	}
?>