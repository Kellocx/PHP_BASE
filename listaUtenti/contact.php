<?php

class Contact
{

    //Attributi
    public string $name;
    public string $phone;

    //Costruttore
    public function __construct(string $name, string $phone)
    {

        $this->name = $name;
        $this->phone = $phone;
    }

    //Metodo o Funzione
    public function getInfo(): string
    {

        return "Nome : $this->name - Telefono $this->phone";
    }
}
?>