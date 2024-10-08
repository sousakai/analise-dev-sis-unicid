<html>
<?php
    session_start();
    if(!isset($_POST['usuario']) || !isset($_POST['senha'])) {
        echo "os dados não chegaram";
    }else{
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        if($usuario === "admin" ||  $senha === "admin" ) {
            $_SESSION["login"] = "s";
            $_SESSION["usuario"] = $usuario; 
            $_SESSION["erro"] = "";
           // echo "usuario autenticado";
        }else{
            $_SESSION["erro"] = "<font color='#A62F2F'> Usuário ou senha incorretos! </font>";
        }		
    }
    header("Location: 07out_sessionsHOME.php");
?>
</html>