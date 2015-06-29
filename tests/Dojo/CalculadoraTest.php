<?php
namespace Dojo;

use PHPUnit_Framework_TestCase;


 class CalculadoraTest extends PHPUnit_Framework_TestCase{
	

	public function testSomarUmMaisUm(){

		$calculadora = new Calculadora();
		$this->assertEquals(2, $calculadora->somar(1,1));
		$this->assertEquals(3, $calculadora->somar(2,1));
		//$this->assertEquals(true, true);
	}

	
}