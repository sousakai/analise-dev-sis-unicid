<?php
session_start();
error_reporting(0);
?>
<html>
	<head>
        <title>HOME SESSION </title>

		<style> 
        #card{
            background: rgb(236,236,236);
            background: radial-gradient(circle, rgba(236,236,236,1) 0%, rgba(76,77,78,1) 100%);
            border-radius: 10px;
            width: 40%;
            margin: 0px auto;
            padding: 5px;
            text-align: center;
        }
        #formLogin {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: black;
            text-align: center;
        }
        #headLogin {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: black;
            font-size: 28px;
        }
        </style>
	</head>
	<body>
	<div id="card">
        <label  id="headLogin" for="login"> Acesse o site: </label>
        <br>

        <?php
            if($_SESSION["erro"] != "") {
                echo $_SESSION["erro"];
            }
        ?>
        <?php if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){
            ?>
                Bem vindo(a)
                <?php echo $_SESSION['user']; ?>
                <br>
                Área privada 
                <br>
                <a href="07out_sessionsLOGOUT.php"> Sair </a> 
        <?php 
            }else{
        ?>
        <form name="login" action = "07out_sessionsLOGIN.php" method = "POST" id="formLogin">
        <!-- Possui senha: não pode ser usado o método GET. -->

	        <label for= "usr">Usuário: </label>
	        <input type="text" id="usr" name ="usuario"><br/>

	        <label for="pwd">Senha: </label>
	        <input type ="password" id="pwd" name ="senha"><br/>

	        <center> 
                <input type = "submit" value = "Enviar">
	            <input type="reset" value="Limpar">
            </center>
            
	    </form>
    </div>
	<?php
            }
    ?>
	
	</body>
</html>