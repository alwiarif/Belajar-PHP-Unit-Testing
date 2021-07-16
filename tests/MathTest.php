<?php

namespace Aliyama\Test;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class MathTest extends TestCase {

    public function testManual(){

        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(20, Math::sum([4,4,4,4,4]));
        self::assertEquals(9, Math::sum([3,3,3]));
        self::assertEquals(0, Math::sum([]));

    }

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected){

        self::assertEquals($expected, Math::sum($values));


    }

    public function mathSumData() : array {

        return [
            [[5,5], 10],
            [[4,4,4,4,4], 20],
            [[3,3,3], 9],
            [[], 0]

        ];

    }

    /**
     * @testWith [[5,5], 10]
     *      [[5,5,5,5,5], 25]
     *       [[2,2,2], 6]
     *        [[1], 1]
     * 
     */

    public function testWith(array $values, int $expected) {

        self::assertEquals($expected, Math::sum($values));
    }


}
