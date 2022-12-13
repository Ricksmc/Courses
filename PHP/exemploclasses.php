<?php
// Exemplo de uso de classes utilizando clean code

class Animal
{

public $especie;
public $peso;

  function tipoEspecie()
  {
    return "Este animal é da espécie {$this->especie}";
  }
}

$animal = new Animal();
$animal->especie = 'Mamiferos';

echo $animal->tipoEspecie();

?>
