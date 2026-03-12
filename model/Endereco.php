<?php
namespace Projeto\model;

    class Endereco{
        private int $codigo;
        private string $logradouro;
        private int $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $pais;
        private int $cep;

        public function __construct(int $codigo,
                                    int $cep,
                                    int $numero,
                                    string $complemento,
                                    string $bairro,
                                    string $cidade,
                                    string $estado,
                                    string $pais,
                                    string $logradouro){
            $this->codigo      = $codigo;
            $this->cep         = $cep;
            $this->numero      = $numero;
            $this->complemento = $complemento;
            $this->bairro      = $bairro;
            $this->cidade      = $cidade;
            $this->estado      = $estado;
            $this->pais        = $pais;
            $this->logradouro  = $logradouro;
    }
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
            "<br>CEP: "        .$this->cep.
            "<br>Numero: "     .$this->numero.
            "<br>Complemento: ".$this->complemento.
            "<br>Bairro: "     .$this->bairro.
            "<br>Cidade: "     .$this->cidade.
            "<br>Estado: "     .$this->estado. 
            "<br>Pais: "       .$this->pais.
            "<br>Logradouro: " .$this->logradouro;
    }//fim do metodo

}//fim da classe




?>