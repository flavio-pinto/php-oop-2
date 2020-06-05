<?php
//Include
include_once __DIR__ . '/Prodotti.php';

class Processori extends Prodotto {
    //Proprietà
    public $frequenza;
    public $gpu_incorporata;

    //Costruttore
    public function __construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita, $_frequenza, $_gpu_incorporata) {
        parent::__construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita);
        $this->frequenza = $_frequenza;
        $this->gpu_incorporata = $_gpu_incorporata;
    }

    //Metodi
    public function stampaInfo() {
        return parent::stampaInfo() . 
        '<br>' . 'Frequenza: ' . $this->frequenza . 
        '<br>' . 'Gpu incorporata: ' . $this->gpu_incorporata;
    }
}