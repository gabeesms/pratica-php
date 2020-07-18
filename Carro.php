<?php

class carro{
    public $modelo;
    public $cor;
    public $marca;
    public $ano;

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno(){
        return $this->ano;
    }

    public function obtemDadosCarro(){
    echo "Modelo: " . $this->modelo;
    echo "<br>Cor: " . $this->cor;
    echo "<br>Marca: " . $this->marca;
    echo "<br>Ano: " . $this->ano;
}
    public function carroCompleto($carro){
        $this->modelo = $carro[0];
        $this->cor = $carro[1];
        $this->marca = $carro[2];
        $this->ano = $carro[3];
    }
    
}
?>