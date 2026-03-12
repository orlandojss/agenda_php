<?php
    namespace Projeto\model; //Determinando o local do arquivo pessoa 
    require_once('Endereco.php');
    use Projeto\model\Endereco;

    class Pessoa{
        //public = qualquer pessoa do projeto pode ver
        //protected = protegido so quem faz parte da familia consegue mexer no dado (herança)
        //private = privada para todas as pessoas, e so a classe mae pode mexer (o dono)

        private int    $codigo; // tipo da variavel
        private string $nome;
        private float  $cpf;
        private string $telefone;
        private Endereco $endereco;
        private bool   $status;

        //primeiro meodo de qualquer classe

        public function __construct(int      $codigo,
                                    string   $nome,
                                    float    $cpf,
                                    string   $telefone,
                                    Endereco $endereco,
                                    bool     $status){
            $this->codigo   = $codigo;
            $this->nome     = $nome;
            $this->cpf      = $cpf;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->status   = $status;
        }// fim do construtor com parametros

        //metodo get e set
        public function __get(string $dado):mixed 
        {
            return $this->dado;
        } //fim do get
        public function __set(string $variavel, string $novoDado):void 
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function imprimir():string
        {
            return "<br>Código: "  .$this->codigo.
                   "<br>Nome: "    .$this->nome.
                   "<br>CPF: "     .$this->cpf.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco->imprimir().
                   "<br>Status: "  .$this->status;
        }//fim do metodo










    }//fim da classe pessoa 


?>