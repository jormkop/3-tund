<?php

	// LOGIN.PHP
	echo $_POST["email"];
	$email_error = "";
	$eemail_error = "";
	$password_error = "";
	$ppassword_error = "";
	$date_error = "";
	
	//teen uue muutuja 
	$name
	//keegi näppis mu nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		
		//vajutas login nuppu
		if(isset($_POST["login"])){
			
					echo "vajutas login nuppu!";
				
					//echo "   Näpud eemale!";
					//kontrollin et email poleks tühi
						
				
					if ( empty($_POST["email"]) ) {
						$email_error = "See väli on kohustuslik";
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
				//keegi vajutas create nuppu
				}elseif(isset($_POST["create"])){
					
					echo "vajutas create nuppu";
					
					if ( empty($_POST["date"]) ) {
						$date_error = "See väli on kohustuslik";
					}
					if ( empty($_POST["eemail"]) ) {
						$eemail_error = "See väli on kohustuslik";
					}
					if ( empty($_POST["password"]) ) {
						$ppassword_error = "See väli on kohustuslik";
					}
					
				}
		
		}
	
		function test_input($data){
			//võtab ära tühikud, enterid, tabid
			$data = trim ($data);
			//tagurpidi kaldkriipsud
			$data =stripslashes($data);
			//		
			
		}
	
	
	
	
	
?>
<?php $page_title = "Sisselogimise leht";
	$page_file_name = "login.php";
?>
<?php require_once("../header.php"); ?>
	<h2>Log in</h2>
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="Email"> <?php echo $email_error ?> <br><br>
			<input name="pass" type="password" placeholder="Parool"> <?php echo $password_error ?> <br><br>
			<input name="login" type="submit" value="login">
		</form>
	
	<h2>Create user</h2>
	Tärniga märgitud lahtrid on kohustuslikud
	<form action="login.php" method="post" >
	<input name="email" type="eemail" placeholder="Email ">*<?php echo $eemail_error ?><br><br>
	<input name="pass" type="ppassword" placeholder="Parool ">*<?php echo $ppassword_error ?><br><br>
	<input name="name" type="first_name" placeholder="Eesnimi"><br><br>
	<input name="name" type="last_name" placeholder="Perekonnanimi"><br><br>
	<input name="date" type="date" placeholder="Sünniaeg ">*<?php echo $date_error ?><br>
	<input name="create" type="submit" value="create">
	</form>
<?php require_once("../footer.php"); ?>