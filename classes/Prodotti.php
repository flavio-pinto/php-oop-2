<?php
/**
 * CLASSE PRINCIPALE PRODOTTI
 */

class Prodotto {
    //Proprietà
    public $marca;
    public $nome_prodotto;
    public $tipo_prodotto;
    public $prezzo;
    public $disponibilita;

    //Costruttore
    public function __construct($_marca, $_nome_prodotto, $_tipo_prodotto, $_prezzo, $_disponibilita) {
        $this->marca = $_marca;
        $this->nome_prodotto = $_nome_prodotto;
        $this->tipo_prodotto = $_tipo_prodotto;
        $this->prezzo = number_format($_prezzo, 2);
        $this->disponibilita = $_disponibilita;
    }

    //Metodi
    public function stampaInfo() {
        return  'Marca: ' . $this->marca . '<br>' . 
                'Nome prodotto: ' . $this->nome_prodotto . '<br>' . 
                'Tipo prodotto: ' . $this->tipo_prodotto . '<br>' . 
                'Prezzo: ' . '€' . $this->prezzo . '<br>' . 
                'Disponibilità: ' . $this->disponibilita;
    }
}