<?php
session_start();
try 
{
    $dsn  = "mysql:host=localhost;dbname=sistema_hospital;";
    $user = "root";
    $pass = "@MySQL_dev_2020";
    $opts = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $conexao = new PDO($dsn, $user, $pass, $opts);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT u.id, u.nome, u.email,
                   DATE_FORMAT(u.data_cadastro, '%d/%m/%Y - %H:%m') AS data_cad 
            FROM usuario u
            WHERE email=? AND senha = sha1(?) ";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, $email);
    $stmt->bindValue(2, $senha);
    $stmt->execute();

    $dados_usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($dados_usuario)
    {
        $_SESSION['dados_usuario'] = $dados_usuario;
        header("location: index.php");

    } else 
        header("location: formulario_login.php?falhou=true");

} catch(Exception $e) {
    echo $e->getMessage();
}