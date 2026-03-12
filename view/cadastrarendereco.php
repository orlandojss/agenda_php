<?php
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    require_once("../model/Endereco.php");//chamando o arquivo
    use projeto\model\Endereco; //chamando a classe q esta no arquivo pessoa.php
    //instanciar uma variavel chamada pessoa
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Endereço</title>
</head>
<body>
    <h1>Cadastrar Endereço</h1>
    <form method="POST">
    <br><br>
        <label>Código: </label> 
        <br>
        <input type="number" name="codigo" id="codigo">
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
        <label>logradouro: </label> 
        <br>
        <input type="text" name="logradouro" id="logradouro">
        <br><br>
        <label>complemento: </label> 
        <br>
        <input type="text" name="complemento" id="complemento">
        <br><br>
        <button type="submit">Cadastrar
            <?php
                try{
                        $codigo      = $_POST['codigo'];
                        $cep         = $_POST['cep'];
                        $numero      = $_POST['numero'];
                        $bairro      = $_POST['bairro'];
                        $cidade      = $_POST['cidade'];
                        $estado      = $_POST['estado'];
                        $pais        = $_POST['pais'];
                        $complemento = $_POST['complemento'];
                        $logradouro  = $_POST['logradouro'];
                        //instanciar a variavel pessoa com dados 
                        $endereco = new Endereco($codigo,
                                                 $cep,
                                                 $numero,
                                                 $bairro,
                                                 $cidade,
                                                 $estado,
                                                 $pais,
                                                 $complemento,
                                                 $logradouro);
                        }catch(exept $erro){
                        echo "Algo deu errado!!! <br><br> $erro";
                        }
            ?>
            </button>
        </form>
        <?php
                    echo $endereco->imprimir();
        ?>
        <button><a href="index.php">voltar</a></button>
</body>
</html>