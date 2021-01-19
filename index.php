<?php

require_once('persona.php');
require_once('impiegato.php');
require_once('impiegatoSalariato.php');
require_once('impiegatoAOre.php');
require_once('impiegatoSuCommissione.php');

/* PROVA PERSONA */

/* $persona1 = new Persona ('Ale', 'Mancio');

var_dump($persona1);

echo $persona1->to_string(); */

/* PROVA IMPIEGATO */

/* $impiegato1 = new Impiegato([
    'nome' => 'Ale',
    'cognome' => 'Mancio',
    'codice_fiscale' => 'ahghekejh',
    'codice_impiegato' => '123',
    'compenso' => 4000
]);

var_dump($impiegato1);

echo $impiegato1->to_string(); */

/* PROVA IMPIEGATO SALARIATO */

/* $impiegato_salariato1 = new ImpiegatoSalariato([
    'nome' => 'Ale',
    'cognome' => 'Mancio',
    'codice_fiscale' => 'ahghekejh',
    'codice_impiegato' => '123',
    'compenso' => 0,
    'giorni_lavorati' => 10,
    'compenso_giornaliero' => 60,
]);

var_dump($impiegato_salariato1); */

/* PROVA IMPIEGATO A ORE */

/* $impiegato_ore1 = new ImpiegatoAOre([
    'nome' => 'Ale',
    'cognome' => 'Mancio',
    'codice_fiscale' => 'ahghekejh',
    'codice_impiegato' => '123',
    'compenso' => 0,
    'ore_lavorate' => 10,
    'compenso_orario' => 30
]);

var_dump($impiegato_ore1); */

/* PROVA IMPIEGATO SU COMMISSIONE */

$impiegato_commissione = new ImpiegatoSuCommissione ([
    'nome' => 'Ale',
    'cognome' => 'Mancio',
    'codice_fiscale' => 'ahghekejh', 
    'codice_impiegato' => '123',
    'compenso' => 100
], 'Boolean Careers', 2000);

var_dump($impiegato_commissione);



?>