<?php
namespace PhptraitorDemo;

class PrimeNumberIterator
    implements \Iterator
{
    use \Traitor\SmartIterator;

    public function __construct($from, $to)
    {
        $isPrime = function($n) {
            if ($n < 2) {
                return false;
            }

            $limit = sqrt($n);
            for ($i = 2; $i <= $limit; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }

            return true;
        };

        $iterator = clone $this;
        $iterator->from($from)->to($to);

        $this->setGuard($isPrime);
 
        foreach ($iterator->select($isPrime) as $number) {
            $this->add($number);
        }
    }
}
