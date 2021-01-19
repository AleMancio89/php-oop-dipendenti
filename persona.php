<?php

class Persona {
    protected $nome;
    protected $cognome;
    protected $codice_fiscale;


    public function __construct($nome, $cognome, $codice_fiscale = 'N.D.'){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }    

    public function to_string(){
        return 'Nome: ' . $this->nome . '<br>' . 'Cognome: ' . $this->cognome . '<br>' . 'C.F.: ' . $this->codice_fiscale;
    }

}


?>