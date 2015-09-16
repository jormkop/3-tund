<?php

	// LOGIN.PHP
	echo $_POST["email"];
	
	//keegi näppis mu nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "   Näpud eemale!";
		//kontrollin et email poleks tühi
		$email_error = " ";
		$password_error = " ";
		
		if ( empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
		}
		if ( empty($_POST["date"]) ) {
			$date_error = "See väli on kohustuslik";
		}
		//kontrollin, et parool ei ole tühi
		if ( empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			//kui oleme siia jõudnud siis parool ei ole tühi
			if(strlen($_POST["password"]) < 8) {
				
				$password_error = "peab olema vähemalt 8 tähemärki pikk";
			}		
		}
	}
?>
<?php require_once("../header.php"); ?>
	<h2>Log in</h2>
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="Email"> <?php echo $email_error ?> <br><br>
			<input name="pass" type="password" placeholder="Parool"> <?php echo $password_error ?> <br><br>
			<input type="submit" value="Press here">
		</form>
	
	<h2>Create user</h2>
	Tärniga märgitud lahtrid on kohustuslikud
	<form action="login.php" method="post" >
	<input name="email" type="email" placeholder="Email ">*<?php echo $email_error ?><br><br>
	<input name="pass" type="password" placeholder="Parool ">*<?php echo $password_error ?><br><br>
	<input name="name" type="first_name" placeholder="Eesnimi"><br><br>
	<input name="name" type="last_name" placeholder="Perekonnanimi"><br><br>
	<input name="date" type="date" placeholder="Sünniaeg ">*<?php echo $date_error ?><br>
	<input type="submit" value="Saini uppi">
	</form>
<?php require_once("../footer.php"); ?>