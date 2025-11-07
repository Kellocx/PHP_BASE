<?php

//CLASSE GENITORE FORMA
class Forma
{
    //con 2 funzioni
    public function area()
    {

        return 0; // valore di default

    }

    public function descrizione()
    {

        return "Forma generica";
    }
}


//CLASSE FIGLIO CERCHIO
class Cerchio extends Forma
{

    //raggio x calcolo area cerchio
    public $raggio;

    //costruttore 
    public function __construct($raggio)
    {

        $this->raggio = $raggio;
    }


    //function calcolo area
    public function area()
    {

        return round(pi() * pow($this->raggio, 2), 2);
    }

    //function descrittiva
    public function descrizione()
    {

        return "Cerchio di raggio {$this->raggio}";
    }
}


//CLASSE FIGLIO RETTANGOLO
class Rettangolo extends Forma
{


    public $base;
    public $altezza;

    //costruttore della classe
    public function __construct($base, $altezza)
    {

        $this->base = $base;
        $this->altezza = $altezza;
    }


    //funzione dedicata per l area
    public function area()
    {

        //calcolo area rettangolo
        return $this->base * $this->altezza;
    }



    //funzione dedicata per la descrizione
    public function descrizione()
    {


        return "Rettangolo {$this->base} x {$this->altezza}";
    }
}


//UTILIZZO
function mostraArea(Forma $forma)
{

    echo $forma->descrizione() . "<br>";
    echo "Area : " . $forma->area() . "cm2 <br><br>";
}


//creo due oggetti in un array
$forme = [

    new Cerchio(5),
    new Rettangolo(4, 5)

];


//applico la funzione a ciascuna forma
foreach ($forme as $forma) {

    mostraArea($forma);
}
?>