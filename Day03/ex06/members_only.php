<?php
	if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys") {
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
		echo base64_encode(file_get_contents("../img/42.png"));
		echo "'>\n</body></html>\n";
	}
	else {
		header("WWW-Authenticate: Basic realm=''Member area''");
		header("Connection: close");
		echo "<html><body>That area is accessible for members only</body></html>\n";
	}
?>
