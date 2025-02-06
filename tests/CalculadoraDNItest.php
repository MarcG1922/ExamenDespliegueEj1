<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraDNITest extends TestCase {
 public function testgetDNIConLetra() {
 $calc = new DNI();
 $this-> assertEquals("12345678Z", $calc->getDNIConLetra(12345678));
 }
}