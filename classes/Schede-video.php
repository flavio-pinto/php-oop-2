<?php
//Include
include_once __DIR__ . '/Prodotti.php';
include_once __DIR__ . '/../traits/Memory-component-infos.php';

class SchedaVideo extends Prodotto {
    //Trait
    use MemoryComponentInfos;
    //Proprietà
    public $ray_tracing;

    //Costruttore
    public function __construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita, $_ray_tracing, $_quantita_memoria, $_ddr) {
        parent::__construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita);
        $this->ray_tracing = $_ray_tracing;
        $this->quantita_memoria = $_quantita_memoria;
        $this->ddr = $_ddr;
    }

    //Metodi
    public function stampaInfo() {
        return parent::stampaInfo() . 
        '<br>' . 'Ray tracing: ' . $this->ray_tracing . 
        '<br>' . 'Quantità memoria: ' . $this->quantita_memoria . 
        '<br>' . 'Ddr: ' . $this->ddr;
    }
}