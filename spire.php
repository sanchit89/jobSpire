<html>
<head>
<title>PHP</title>
</head>
<body>
<?php
	echo '<br/>';
	echo '<form name="firstChallenge" method="post">';
	echo 'Enter Your Name : <input type="textbox" name="name">';
	echo '<input type="submit" name="submit" value="Submit">';
	echo '</form>';

if (isset($_POST['submit'])) { // Checks for the method
	
	$name = $_POST['name']; // Gets Name
	$getRandom = rand(6, 15); // Generates Random Number between 6 and 15
	echo 'Name, Generated Number : ' . $name . ', ' . $getRandom; // Displays Name and Random Number

}
	
?>

</body>
</html>



				
				
		