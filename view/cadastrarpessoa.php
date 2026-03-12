<?php
    namespace Projeto\view;
    require_once("../model/Endereco.php");
    require_once("../model/Pessoa.php");//chamando o arquivo
    use projeto\model\Pessoa; //chamando a classe q esta no arquivo pessoa.php
    use projeto\model\Endereco;
    //instanciar uma variavel chamada pessoa
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
    <form method="POST">
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
        <label>status: </label> 
        <br>
        <input type="text" name="status" id="status">
        <br><br>
        <label>CEP: </label> 
        <br>
        <input type="number" name="cep" id="cep">
        <br><br>
        <label>numero: </label> 
        <br>
        <input type="number" name="numero" id="numero">
        <br><br>
        <label>Bairro: </label> 
        <br>
        <input type="text" name="bairro" id="bairro">
        <br><br>
        <label>cidade: </label> 
        <br>
        <input type="number" name="cidade" id="cidade">
        <br><br>
        <label>Estado: </label> 
        <br>
        <input type="text" name="estado" id="estado">
        <br><br>
        <label>pais: </label> 
        <br>
        <input type="text" name="pais" id="pais">
        <br><br>
        <label>complemento: </label> 
        <br>
        <input type="text" name="complemento" id="complemento">
        <br><br>
        <label>logradouro: </label> 
        <br>
        <input type="text" name="logradouro" id="logradouro">
        <br><br>
        <button type="submit">Cadastrar
            <?php
                try{
                        $codigo      = $_POST['codigo'];
                        $nome        = $_POST['nome'];
                        $cpf         = $_POST['cpf'];
                        $telefone    = $_POST['telefone'];
                        $status      = $_POST['status'];
                        $cep         = $_POST['cep'];
                        $numero      = $_POST['numero'];
                        $bairro      = $_POST['bairro'];
                        $cidade      = $_POST['cidade'];
                        $estado      = $_POST['estado'];
                        $pais        = $_POST['pais'];
                        $complemento = $_POST['complemento'];
                        $logradouro  = $_POST['logradouro'];
                        //instanciar a variavel pessoa com dados               
                        //trazer dados do formulario 
                        $endereco = new Endereco($codigo, 
                                                 $cep, 
                                                 $numero, 
                                                 $complemento,
                                                 $bairro, 
                                                 $cidade, 
                                                 $estado,
                                                 $pais, 
                                                 $logradouro);
                    }catch(exeption $erro){
                    echo "Algo deu errado!!! <br><br> $erro";
                    }    
            ?>
        </button>
        <?php
                $pessoa = new Pessoa($codigo, 
                                     $nome, 
                                     $cpf, 
                                     $telefone, 
                                     $status);
                                     
                echo $pessoa->imprimir();
        ?>
    </form>
    <button><a href="index.php">voltar</a></button>
</body>
</html>