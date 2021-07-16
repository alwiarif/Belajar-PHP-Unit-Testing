<?php

namespace Aliyama\Test;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class PersonTest extends TestCase {

    private Person $person;

    protected function setUp(): void
    {
    }

    /**
     * @before
     */
    public function createPerson(){
        $this->person = new Person("Nice");

    }

    public function testSuccess() {

        self::assertEquals("Hello Nasi, my name is Nice", $this->person->sayHello("Nasi"));

    }

    public function testException() {

        $this->expectException(\Exception::class);
        $this->person->sayHello(null);


    }

    public function testOutput(){

        $this->expectOutputString("Good bye Nice" . PHP_EOL);
        $this->person->sayGoodBye("Nice");

    }

}