<?php
namespace VyVSF2022\PrimeFactors\Test;

use VyVSF2022\PrimeFactors\PrimeFactors;
use PHPUnit\Framework\TestCase;


class PrimeFactorsTest extends TestCase {
    /**
     * @test
     */
    function number_1_should_return_empty_array(){
        $primeFactors = new PrimeFactors();
        $this->assertEquals(expected: [], actual: $primeFactors->calculatePrimeFactors(1));
    }


}
?>