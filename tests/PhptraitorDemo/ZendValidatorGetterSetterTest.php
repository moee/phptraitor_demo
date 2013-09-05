<?php 

use Traitor\GetSet\ZendValidator;

class ZendValidatorGetterSetterTest
    extends PHPUnit_Framework_TestCase
 {
     
    /**
     * @Test
     * @expectedException \InvalidArgumentException
     */
    public function testSetNameMustNotBeEmpty()
    {
        $simpleGetterSetter = new PhptraitorDemo\ZendValidatorGetterSetter();
        $simpleGetterSetter->setName('');
    }
    
    /**
     * @Test
     * @expectedException \InvalidArgumentException
     */
    public function testSetScoreMustNotBeLowerThanZero()
    {
        $simpleGetterSetter = new PhptraitorDemo\ZendValidatorGetterSetter();
        $simpleGetterSetter->setScore(-1);
    }
    
    /**
     * @Test
     */
    public function testSetValidScore()
    {
        $simpleGetterSetter = new PhptraitorDemo\ZendValidatorGetterSetter();
        $simpleGetterSetter->setScore(5);
        $this->assertEquals(5, $simpleGetterSetter->getScore());
    }
    
    /**
     * @Test
     */
    public function testSetValidCode()
    {
        $simpleGetterSetter = new PhptraitorDemo\ZendValidatorGetterSetter();
        $simpleGetterSetter->setCode('abcde');
        $this->assertEquals('abcde', $simpleGetterSetter->getCode());
    }
    
    /**
     * This should be catched by {@link \Zend\Validator\StringLength}
     * @Test
     * @expectedException \InvalidArgumentException
     */
    public function testSetTooLongCode()
    {
        $simpleGetterSetter = new PhptraitorDemo\ZendValidatorGetterSetter();
        $simpleGetterSetter->setCode('abcdeee');
    }

    /**
     * This should be catched by {@link \Zend\Validator\StringLength}
     * @Test
     * @expectedException \InvalidArgumentException
     */
    public function testSetCodeWithInvalidCharacters()
    {
        $simpleGetterSetter = new PhptraitorDemo\ZendValidatorGetterSetter();
        $simpleGetterSetter->setCode('1bcde');
    }
    
 }