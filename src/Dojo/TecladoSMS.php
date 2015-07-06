<?php
namespace Dojo;

class TecladoSMS
{
    public function __construct()
    {

    }

    public function sendLetra($letra)
    {
    	switch ($letra) {
    		case 'E':
    		case 'e':
    			return '33';
    			break;
    		case 'U':
    		case 'u':
    			return '88';
    			break;
    		case ' ':
	    		return '0';
	    		break;
	    	case 'V':
	    	case 'v':
	    		return '888';
	    		break;
	    	case 'O':
	    	case 'o':
	    		return '666';
	    		break;
	    	case 'Q':
	    	case 'q':
	    		return '77';
	    		break;
	    	case 'R':
	    	case 'r':
	    		return '777';
	    		break;
	    	case 'M':
	    	case 'm':
	    		return '6';
	    		break;
	    	case 'B':
	    	case 'b':
	    		return '22';
	    		break;	
	    	case 'I':
	    	case 'i':
	    		return '444';
	    		break;
	    	case 'L':
	    	case 'l':
	    		return '555';
	    		break;		
    		default:
    			return 'Letra não encontrada';
    			break;
    	}
    }

    public function sendFrase($frase)
    {
    	
    	$arr1 = str_split($frase);
    	$fraseTraduzida = '';

    	for($i=0; $i<count($arr1); $i++){
    		$fraseTraduzida = $fraseTraduzida.$this->sendLetra($arr1[$i]);
    	}

    	return $fraseTraduzida;


    }
}
