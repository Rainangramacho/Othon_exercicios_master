<html>
    <link rel="stylesheet" href="styles.css">
    <body>
		<?php
            $name = $_POST["name"];
            $email = $_POST["email"];

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if($name == "Murilo" and $email=="muriloandradealmeida@gmail.com"){
                    echo "Welcome ", $name, "<br>"; 
                    
                    echo "Your email address is: ", $email;
                }
            }
        ?>
	</body>
</html>