<?php

    class Contact {
        public string $name;
        public string $phone;


        //costruttore
        public function __construct(string $name, string $phone){
        
        $this->name = $name;
        $this->phone = $phone;
        }

        //metodo o funzione
        public function getInfo(): string {
            return "Nome : $this->name - Telefono $this->phone";
        }
    }
?>