<?php

namespace Heesbeen\KanyeQuotes\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Heesbeen\KanyeQuotes\Service\KanyeWestApi;

class KanyeQuotesUnitTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testGetRandomNumberOfValuesFromArray(): void
    {
        $testArray = [
            'red',
            'yellow',
            'green',
            'blue',
            'white',
            'pink',
            'orange',
            'brown',
            'gray'
        ];

        $kanyeWestApi = new KanyeWestApi;
        $randomArray = $kanyeWestApi->getRandomNumberOfValuesFromArray($testArray);
        $this->assertCount(5, $randomArray);

        $randomArray = $kanyeWestApi->getRandomNumberOfValuesFromArray($testArray, 3);
        $this->assertCount(3, $randomArray);
    }
}
