<?php

require_once('persona.php');

class Impiegato extends Persona {
    protected $codice_impiegato;
    protected $compenso;


    public function __construct($dati_impiegato) {
        parent::__construct(
            $dati_impiegato['nome'],
            $dati_impiegato['cognome'],
            $dati_impiegato['codice_fiscale']
        );
        $this->codice_impiegato = $dati_impiegato['codice_impiegato'];
        $this->compenso = $dati_impiegato['compenso'];

    }

    private function calcola_compenso(){
        return $this->compenso;
    }

    public function to_string(){
        return parent::to_string() . '<br>' . 'Codice Impiegato: ' . $this->codice_impiegato . '<br>' . 'Compenso: ' . $this->compenso;
    }
    
}

?>