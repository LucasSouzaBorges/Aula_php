<?php

class Pessoa{
    private $Nome;
    private $Endereço;
    private $Bairro;
    private $CEP;

    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getNome(){
        return $this->Nome;
    }

    public function setEndereço($Endereço){
        $this->Endereço = $Endereço;
    }
    public function getEndereço(){
        return $this->Endereço;
    }

    public function setBairro($Bairro){
        $this->Bairro = $Bairro;
    }
    public function getBairro(){
        return $this->Bairro;
    }

    public function setCEP($CEP){
        $this->CEP = $CEP;
    }
    public function getCEP(){
        return $this->CEP;
}
}

$temp = new Pessoa();
$temp->setNome("Lucas Borges" ."<br>");
echo "<h2>" .$temp->getNome(). "</h2>";

$temp->setEndereço("ETEC ZONA LESTE" ."<br>");
echo "<h2>" .$temp->getEndereço()."</h2>";

$temp->setBairro("AV Aguia de Haia, 2223" ."<br>");
echo "<h2>" .$temp->getBairro()."</h2>";

$temp->setCEP("222.555.666");
echo "<h2>" .$temp->getCEP()."</h2>";
?>