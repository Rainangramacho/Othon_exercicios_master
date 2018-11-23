<html>
    <link rel="stylesheet" href="styles.css">
    <body>
        <?php
            $name = $_GET["name"];
            $email = $_GET["email"];

            if($_SERVER["REQUEST_METHOD"] == "GET"){
                if($name == "Murilo" and $email=="muriloandradealmeida@gmail.com"){
                    echo "Welcome ", $name, "<br>"; 
                    
                    echo "Your email address is: ", $email;
                }
            }
        ?>
    </body>
</html>