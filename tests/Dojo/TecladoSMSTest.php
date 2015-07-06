<?php
namespace Dojo;

use PHPUnit_Framework_TestCase;

/**
* Eu vou querer um bile
**/


class TecladoSMSTest extends PHPUnit_Framework_TestCase
{
    public function testLetrasDaFrase(){

    	$tecladoSMS = new TecladoSMS();

    	$this->assertEquals($tecladoSMS->sendLetra('E'), '33');
    	$this->assertEquals($tecladoSMS->sendLetra('e'), '33');
    	$this->assertEquals($tecladoSMS->sendLetra('U'), '88');
    	$this->assertEquals($tecladoSMS->sendLetra('u'), '88');
    	$this->assertEquals($tecladoSMS->sendLetra(' '), '0');
    	$this->assertEquals($tecladoSMS->sendLetra('V'), '888');
    	$this->assertEquals($tecladoSMS->sendLetra('v'), '888');
    	$this->assertEquals($tecladoSMS->sendLetra('O'), '666');
    	$this->assertEquals($tecladoSMS->sendLetra('o'), '666');
    	$this->assertEquals($tecladoSMS->sendLetra('Q'), '77');
    	$this->assertEquals($tecladoSMS->sendLetra('q'), '77');
    	$this->assertEquals($tecladoSMS->sendLetra('R'), '777');
    	$this->assertEquals($tecladoSMS->sendLetra('r'), '777');
    	$this->assertEquals($tecladoSMS->sendLetra('M'), '6');
    	$this->assertEquals($tecladoSMS->sendLetra('m'), '6');
    	$this->assertEquals($tecladoSMS->sendLetra('B'), '22');
    	$this->assertEquals($tecladoSMS->sendLetra('b'), '22');
    	$this->assertEquals($tecladoSMS->sendLetra('I'), '444');
    	$this->assertEquals($tecladoSMS->sendLetra('i'), '444');
    	$this->assertEquals($tecladoSMS->sendLetra('L'), '555');
    	$this->assertEquals($tecladoSMS->sendLetra('l'), '555');
    }

    public function testPalavra(){

    	$tecladoSMS = new TecladoSMS();
    	$this->assertEquals($tecladoSMS->sendFrase('Eu'), '3388');
    	$this->assertEquals($tecladoSMS->sendFrase(' '), '0');
    	
    	
    }
}
