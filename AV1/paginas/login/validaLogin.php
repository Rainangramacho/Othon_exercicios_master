<?php
    if(isset($_POST["login"])){
        $login = $_POST["usuario"];
        $senha = $_POST["senha"];

        if(isset($login) and isset($senha)){
            if($login=="admin" and $senha=="admin"){
                header('Location: ../adm/menu.html');
                exit;
            }
            elseif($login=="operador" and $senha=="operador"){
                header('Location: ../op/menu.html');
                exit;
            }
            else{
                echo "<h2 style='color: red;'>Você não deveria estar aqui!</h2>";
            }
        }
    }
?>