<?php
namespace PhptraitorDemo;

use Traitor\GetSet\ZendValidator;
use Traitor\GetSet\Simple;

/**
 * This class demonstrates how the field type {@link ZendValidator} can be
 * used for input validation tasks. 
 * 
 * @author moe
 *
 */
class ZendValidatorGetterSetter
{
    use \Traitor\GetSet;
    
    /**
     * @ZendValidator("NotEmpty")
     */
    private $name;

    /**
     * @ZendValidator("Between", options={"min":1,"max":10})
     */
    private $score;
    
    /**
     * Set a code that must be exactly 5 characters long and consist
     * only of alphanumeric chars. Demonstration of validator
     * chainig
     *
    /**
     * @ZendValidator("StringLength", options={"min":5,"max":5})
     * @ZendValidator("Regex", options={"pattern":"/^[a-z]*$/"})
     */
    private $code;
}

