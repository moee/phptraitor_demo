<?php 

use Traitor\GetSet\ZendValidator;

class PrimeNumberIteratorTest
    extends PHPUnit_Framework_TestCase
{
     
    /**
     * @Test
     */
    public function testFirstFivePrimes()
    {
        $primeNumberIterator = new PhpTraitorDemo\PrimeNumberIterator(1, 11);
        $this->assertEquals(array(2,3,5,7,11), $primeNumberIterator->toArray());
    }

    public function testEmpty()
    {
        $primeNumberIterator = new PhpTraitorDemo\PrimeNumberIterator(-10, 0);
        $this->assertEquals(array(), $primeNumberIterator->toArray());
    }
}
