<?php

require "hola-mundo.php";

class HolaMundoTest extends PHPUnit\Framework\TestCase
{
    public function testHolaMundo()
    {
        $this->assertEquals('¡Hola, mundo!', holaMundo());
    }
}
