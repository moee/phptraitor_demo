<?php 

use Traitor\GetSet\Simple;

class MultipleInstancesTest
    extends PHPUnit_Framework_TestCase
 {
     
    /**
     * @Test
     */
    public function testGetName()
    {
        $simpleGetterSetter1 = new PhptraitorDemo\SimpleGetterSetter();
        $simpleGetterSetter1->setName('name1');
        $simpleGetterSetter2 = new PhptraitorDemo\SimpleGetterSetter();
        $simpleGetterSetter2->setName('name2');
        $this->assertEquals('name1', $simpleGetterSetter1->getName());
        $this->assertEquals('name2', $simpleGetterSetter2->getName());
    }
 }