<?php

require_once('impiegato.php');

trait Progetto {
    protected $nome_progetto;
    protected $commissione;
}

class ImpiegatoSuCommissione extends Impiegato{
    use Progetto;

    public function __construct($dati_impiegato_commissione, $nome_progetto, $commissione){
        parent::__construct($dati_impiegato_commissione);
        $this->nome_progetto = $nome_progetto;
        $this->commissione = $commissione;

        $this->calcola_compenso();
    }

    private function calcola_compenso(){
        return $this->compenso += $this->commissione;
    }
}

?>