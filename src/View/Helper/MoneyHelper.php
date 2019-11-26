<?php
namespace App\View\Helper;

use Cake\View\Helper;

//Modificar em AppView a função initialize() para carregar a classe Money
class MoneyHelper extends Helper{

    public function format($number){
        return "R$ ".number_format($number, 2, ",", ".");
    }
}

?>