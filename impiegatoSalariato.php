<?php

require_once('impiegato.php');

class ImpiegatoSalariato extends Impiegato {
    protected $giorni_lavorati;
    protected $compenso_giornaliero;

    public function __construct($dati_impiegato_salariato){
        parent::__construct($dati_impiegato_salariato);
        $this->giorni_lavorati = $dati_impiegato_salariato['giorni_lavorati'];
        $this->compenso_giornaliero = $dati_impiegato_salariato['compenso_giornaliero'];      

        $this->calcola_compenso();
    }

    private function calcola_compenso(){
        return $this->compenso = $this->giorni_lavorati * $this->compenso_giornaliero;
    }
}

?>