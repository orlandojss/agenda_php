<?php
    namespace Projeto\model; //Determinando o local do arquivo pessoa 

    class Pessoa{
        //public = qualquer pessoa do projeto pode ver
        //protected = protegido so quem faz parte da familia consegue mexer no dado (herança)
        //private = privada para todas as pessoas, e so a classe mae pode mexer (o dono)

        private int $codigo; // tipo da variavel
        private string $nome;
        private float $cpf;
        private string $telefone;
        private string $endereco;

        //primeiro meodo de qualquer classe
        public function __construct(){
            $this ->codigo = 0;
            $this ->nome = "";
            $this ->cpf = 0;
            $this ->telefone "";
            $this ->endereco = "";
            $this ->status = true;
        }//fim do medoto construtor

        public function __construct(int $codigo,
                                    string $nome,
                                    float $cpf,
                                    string $telefone,
                                    string $endereco,
                                    boolean $status )
        {
            $this ->codigo = $codigo
            $this ->nome = $nome
            $this ->cpf  = $cpf
            $this ->telefone = $telefone
            $this ->endereco = $endereco 
            $this ->status = $status
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
        public function imprimir():string{
            return "<br>Códogo: ".$this->codigo.
                   "<br>Nome: ".$this->nome.
                   "<br>CPF: ".$this->cpf.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Endereço: ".$this->endereco.
                   "<br>Status: ".$this->status.
        }//fim do metodo










    }//fim da classe pessoa 


?>