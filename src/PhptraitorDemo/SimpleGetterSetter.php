<?php
namespace PhptraitorDemo;

use Traitor\GetSet\Simple;

class SimpleGetterSetter
{
    use \Traitor\GetSet;
    
    /**
     * @Simple
     */
    private $name;

    /**
     * @Simple
     */
    private $address;

    /**
     * @Simple
     */
    private $city;
    
}

