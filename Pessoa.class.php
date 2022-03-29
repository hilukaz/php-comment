<?php

class Pessoa{//classe pessoa
    private $nome, $endereco, $bairro, $cep, $cidade, $estado; //variáveis pessoas
    

    public function setNome($nome){;//recebe a variável, inicializando o encapsulamento
        $this->nome = $nome;//$this indicando a variável global atribuindo a classe local
    }//fechando encapsulamento
    
    public function setEndereco($endereco){
        $this->endereco= $endereco;
    }

    public function setBairro($bairro){
        $this->bairro=$bairro;
    }

    public function setCep($cep){
        $this->cep=$cep;
    }

    public function setCidade($cidade){
        $this->cidade=$cidade;
    }

    public function setEstador($estado){
        $this->estado=$estado;
    }

    public function getNome(){//pegando a variável, inicializando o encapsulamento
        return $this->nome;//retornando a variável
    }//fechando encapsulamento
    
    public function getEndereco(){
        return $this->endereco;
    }
    
    public function getBairro(){
        return $this->bairro;
    }
    
    public function getCep(){
        return $this->cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }
}


?>