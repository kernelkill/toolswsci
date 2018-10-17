<?php
$teste = "Aqui Jaz um teste<br>";

echo $teste;
class Teste {
    
    private $nome;
    
    public function __construct() {
        $this->nome = "Teste";
        
    }
    
    public function getNome() {
        return $this->nome;
    }
}


$var = new Teste();
echo ($var->getNome());

?>