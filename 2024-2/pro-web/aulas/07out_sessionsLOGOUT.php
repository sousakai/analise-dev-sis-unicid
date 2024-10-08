<?php
    /* forma01 */
    session_start();
    session_destroy();
    header("Location: 07out_sessionsHOME.php");
    
    /* forma02 
    unset($_SESSION["login"]);
    unset($_SESSION["user"]);
    $_SESSION["erro"] = "Deslogado com sucesso";
    */
?>