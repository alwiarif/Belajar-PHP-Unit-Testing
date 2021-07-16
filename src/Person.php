<?php

namespace Aliyama\Test;

class Person {

    public function __construct(private string $name)
    {
        
    }

    public function sayHello (? string $name) : string {

        if ($name == null || $name == "") throw new \Exception("Name gak boleh kosong");

        return "Hello $name, my name is $this->name";

    }

    public function sayGoodBye(?string $name): void {

        echo "Good bye $name" . PHP_EOL;

    }

}