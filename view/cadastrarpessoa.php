<?php
    namespace Projeto\view;
    require_once("../model/Pessoa.php");//chamando o arquivo
    use projeto\model\pessoa; //chamando a classe q esta no arquivo pessoa.php
    //instanciar uma variavel chamada pessoa
    $pessoa = new Pessoa
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form metod="POST">
    <br><br>
        <label>Código: </label> 
        <br>
        <input type="number" name="codigo" id="codigo">
        <br><br>
        <label>nome: </label> 
        <br>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label>cpf: </label> 
        <br>
        <input type="number" name="cpf" id="cpf">
        <br><br>
        <label>Telefone: </label> 
        <br>
        <input type="text" name="telefone" id="telefone">
        <br><br>
        <label>endereco: </label> 
        <br>
        <input type="number" name="endereco" id="endereco">
        <br><br>
        <label>status: </label> 
        <br>
        <input type="text" name="status" id="status">
        <br><br>
        <button type="submit">Cadastrar
            <?php
                try{
                    $codigo   = $_POST['codigo'];
                    $nome     = $_POST['nome'];
                    $cpf      = $_POST['cpf'];
                    $telefone = $_POST['telefone'];
                    $endereco = $_POST['endereco'];
                    $status   = $_POST['status'];
                    //instanciar a variavel pessoa com dados 
                    $pessoa = new Pessoa($codigo, $nome, $cpf, $telefone, $endereco, $status)

                }catch(exept $erro){
                    echo "Algo deu errado!!! <br><br> $erro";
                }
            ?>
        </button>
        <?php
                echo "$pessoa -> "
        ?>
    </form>
    <button><a href="index.php"></a>voltar</a></button>
</body>
</html>