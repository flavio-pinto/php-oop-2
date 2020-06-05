<?php
//Include
include_once __DIR__ . '/Prodotti.php';
include_once __DIR__ . '/../traits/Memory-component-infos.php';

class Ram extends Prodotto {
    //Trait
    use MemoryComponentInfos;
    //Proprietà
    public $latenza;
    public $profile_type;

    //Costruttore
    public function __construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita, $_latenza, $_profile_type, $_quantita_memoria, $_ddr) {
        parent::__construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita);
        $this->latenza = $_latenza;
        $this->profile_type = $_profile_type;
        $this->quantita_memoria = $_quantita_memoria;
        $this->ddr = $_ddr;
    }

    //Metodi
    public function stampaInfo() {
        return parent::stampaInfo() . 
        '<br>' . 'Latenza: ' . $this->latenza . 
        '<br>' . 'Profilo: ' . $this->profile_type . 
        '<br>' . 'Quantità memoria: ' . $this->quantita_memoria . 
        '<br>' . 'Ddr: ' . $this->ddr;
    }
}