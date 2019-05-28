<?php 
	if (isset($_POST['submit'])) {
		if (!is_null($_POST['email'] && !is_null($_POST['password']))) {
			$conn = mysqli_connect('localhost', 'root', '', 'test');
			if (!$conn) {
				die("Connetion fail: ". mysqli_connect_error());
			}
			$sql = "SELECT name FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
			if (!$result = $conn->query($sql)) {
			    // Error connection
			    echo "Login error.";
			    exit;
			}else{
				if ($user = $result->fetch_assoc()) {
					echo "Welcome ".$user['name'];
				}else{
					// User dont find
					echo "Invalid User";
				}
			}
		}
	}
 ?>