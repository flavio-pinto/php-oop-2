<?php
/**
 * Crea e modellizza classi per gestire i prodotti di magazzino
 * Come fatto in classe questa mattina creare una classe generale e poi creare altre classi che estendono questa classe generale
 * Come fatto nell’esercizio di ieri poi eseguite degli output istanziando oggetti delle varie classi
 */

//Include
include_once __DIR__ . '/classes/Schede-video.php';
include_once __DIR__ . '/classes/Ram.php';
include_once __DIR__ . '/classes/Processori.php';

$schedaVideo1 = new SchedaVideo('AMD', 'RX 580', 'Scheda grafica', '400', 'Sì', 'No', '8gb', 'GDDR5');

echo $schedaVideo1->stampaInfo();

echo '<br><br><br>';

$memoriaRam1 = new Ram('Crucial', 'Ballistix', 'Memoria Ram', '120', 'No', 'CL14', 'Low Profile', '16gb', 'DDR4');

echo $memoriaRam1->stampaInfo();

echo '<br><br><br>';

$processore1 = new Processori('Intel', 'i9-10900k', 'Cpu', '500', 'Sì', '5,30GHz', 'No');

echo $processore1->stampaInfo();