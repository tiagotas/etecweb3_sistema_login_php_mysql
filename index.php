<?php
session_start();

if(!isset($_SESSION['dados_usuario']))
    header("Location: formulario_login.php");

if(isset($_GET['sair']))
{
    session_destroy();
    header("Location: formulario_login.php");
}
?>

<h1>
    Bem-vindo à área restrira 
    <?= $_SESSION['dados_usuario']['nome'] ?>
    Cadastrado em  <?= $_SESSION['dados_usuario']['data_cad'] ?> |

    <a href="?sair=true">SAIR</a>
</h1>