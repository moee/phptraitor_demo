<?php 

use Traitor\GetSet\Simple;

class SimpleGetterSetterTest
    extends PHPUnit_Framework_TestCase
 {
     
    /**
     * @Test 
     */
    public function testSetName()
    {
        $simpleGetterSetter = new PhptraitorDemo\SimpleGetterSetter();
        $simpleGetterSetter->setName('name3');
    }
    
    /**
     * @Test
     */
    public function testGetName()
    {
        $simpleGetterSetter = new PhptraitorDemo\SimpleGetterSetter();
        $simpleGetterSetter->setName('name3');
        $this->assertEquals('name3', $simpleGetterSetter->getName());
    }
    
    /**
     * If nothing has been set, the getter should return null
     */
    public function testGetIsNull()
    {
        $simpleGetterSetter = new PhptraitorDemo\SimpleGetterSetter();
        $this->assertNull($simpleGetterSetter->getName());
    }
 }