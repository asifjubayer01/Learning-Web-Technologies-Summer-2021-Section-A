<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob = $_REQUEST['dob'];

		if($dob == ""){
			echo "invalid email!";
		}else{
			echo $dob;
		}

	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<body>
		<form method="post">

		<fieldset><legend>Date Of Birth</legend> <input type="date" name="dob" value="" /><br>
				<input type="submit" name="submit" value="Submit"></fieldset>
	</form>
</body>
</html>