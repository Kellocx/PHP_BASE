<?php


//-----------------------------------------------------------------MODELLAZIONE-------------------------------------------------------------

//Classe genitore
//Dichiarazione di una classe Animale
class Animale
{

    public $nome;
    public $specie;
    public $peso;
    public $habitat;


    //costruttore della classe
    public function __construct($nome, $specie, $peso, $habitat)
    {

        $this->nome = $nome;
        $this->specie = $specie;
        $this->peso = $peso;
        $this->habitat = $habitat;
    }

    //La Classe Animale puo' avere una funzione o piu funct 
    public function verso()
    {

        return "";
    }
}



//Classe figlio Cane di Animale
class Cane extends Animale
{

    public function verso()
    {

        return "Abbaia";
    }
}



//Classe figlio Gatto di Animale
class Gatto extends Animale
{

    public function verso()
    {

        return "Miagola";
    }
}


//-----------------------------------------------------------------MODELLAZIONE UTILIZZO QUINDI CON OGGETTI-------------------------------------------------------------


$cane = new Cane(nome: "Fido", specie: "Carlino", peso: 20, habitat: "Giardino");

$gatto = new Gatto(nome: "Felix", specie: "Maine coon", peso: 4, habitat: "Divano");


function faiParlare(Animale $animale)
{


    echo "{$animale->nome}({$animale->specie}) dice: " . $animale->verso() . "<br>";
    echo "Peso : {$animale->peso} kg, e l Habitat è : {$animale->habitat}<br><br>";
}


faiParlare(animale: $gatto); //gatto
faiParlare(animale: $cane); //cane
