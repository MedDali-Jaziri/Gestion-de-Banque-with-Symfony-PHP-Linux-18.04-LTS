<?php

namespace App\Entity;
require_once '/home/dell/Gestion-de-Banque-with-Symfony-PHP-Linux-18.04-LTS/src/Entity/Compte.php';


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Versement extends Operation
{
    function __construct() {
        $argv = func_get_args();
        switch( func_num_args() ) {
            case 1:
                self::__construct1();
                break;
            case 2:
                self::__construct2( $argv[0], $argv[1]);
         }
    }

    public function __construct1(){
        parent::__construct();
    }

    public function __construct2($dateOperation,$montant,$compte){
        $this->$compte = new Compte();
        parent::__construct($dateOperation,$montant,$compte);
    }
}
?>