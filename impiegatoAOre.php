<?php

require_once('impiegato.php');

class ImpiegatoAOre extends Impiegato {
    protected $ore_lavorate;
    protected $compenso_orario;

    public function __construct($dati_impiegato_ore){
        parent::__construct($dati_impiegato_ore);
        $this->ore_lavorate = $dati_impiegato_ore['ore_lavorate'];
        $this->compenso_orario = $dati_impiegato_ore['compenso_orario'];

        $this->calcola_compenso();        
    }

    private function calcola_compenso(){
        return $this->compenso = $this->ore_lavorate * $this->compenso_orario;
    }
}

?>