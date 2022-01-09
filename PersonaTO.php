<?php

class PersonaTO
{

private $personaNombre;
private $personaID;
private $personaApuesta;
private $personaPuntos;
private $personaAciertos;
private $personaFallos;
private $personaFecha;
private $personaApuestaString;
 
 			//	C	O	N	S	T	R	U	C	T	O	R

	function PersonaTO()
	{
	$this->personaNombre = '';
	$this->personaID = '';
	$this->personaApuesta  = array();
	$this->personaPuntos = 0;
	$this->personaAciertos = 0;
	$this->personaFallos = 0;
        $this->personaFecha = '';
        $this->personaApuestaString = '';
	}

 			//	C	O	N	S	T	R	U	C	T	O	R

 			//	G	E	T	T	E	R
		
		function getPersonaNombre(){
		return $this->personaNombre;
		}

		function getPersonaID(){
		return $this->personaID;
		}

		function getPersonaApuesta(){
		return $this->personaApuesta;
		}

		function getPersonaPuntos(){
		return $this->personaPuntos;
		}
		
		function getPersonaAciertos(){
			return $this->personaAciertos;
			}
			
		function getPersonaFallos(){
			return $this->personaFallos;
			}
                        
                function getPersonaFecha(){
			return $this->personaFecha;
			}
		
                function getPersonaApuestaString(){
			return $this->personaApuestaString;
			}        
                        
 			//	G	E	T	T	E	R
 			
 			//	S	E	T	T	E	R	
 				
		function setPersonaID($lpersonaid){
			$this->personaID = $lpersonaid;
			}
			
		function setpersonaNombre($lpersonanombre){
			$this->personaNombre = $lpersonanombre;
			}
		
		function setPersona($lpersonaID, $lpersonaNombre){
		$this->personaNombre = $lpersonaNombre;
		$this->personaID = $lpersonaID;
		}
		
		function setPersonaApuesta($oPer, $arregloApuestas){
			
			if(isset($arregloApuestas[0])){$oPer->personaApuesta[0] = $arregloApuestas[0];}else{$oPer->personaApuesta[0] = '';}
			if(isset($arregloApuestas[1])){$oPer->personaApuesta[1] = $arregloApuestas[1];}else{$oPer->personaApuesta[1] = '';}
			if(isset($arregloApuestas[2])){$oPer->personaApuesta[2] = $arregloApuestas[2];}else{$oPer->personaApuesta[2] = '';}
			if(isset($arregloApuestas[3])){$oPer->personaApuesta[3] = $arregloApuestas[3];}else{$oPer->personaApuesta[3] = '';}
			if(isset($arregloApuestas[4])){$oPer->personaApuesta[4] = $arregloApuestas[4];}else{$oPer->personaApuesta[4] = '';}
			if(isset($arregloApuestas[5])){$oPer->personaApuesta[5] = $arregloApuestas[5];}else{$oPer->personaApuesta[5] = '';}
			if(isset($arregloApuestas[6])){$oPer->personaApuesta[6] = $arregloApuestas[6];}else{$oPer->personaApuesta[6] = '';}
			if(isset($arregloApuestas[7])){$oPer->personaApuesta[7] = $arregloApuestas[7];}else{$oPer->personaApuesta[7] = '';}
			if(isset($arregloApuestas[8])){$oPer->personaApuesta[8] = $arregloApuestas[8];}else{$oPer->personaApuesta[8] = '';}
			if(isset($arregloApuestas[9])){$oPer->personaApuesta[9] = $arregloApuestas[9];}else{$oPer->personaApuesta[9] = '';}
			if(isset($arregloApuestas[10])){$oPer->personaApuesta[10] = $arregloApuestas[10];}else{$oPer->personaApuesta[10] = '';}
			if(isset($arregloApuestas[11])){$oPer->personaApuesta[11] = $arregloApuestas[11];}else{$oPer->personaApuesta[11] = '';}
			if(isset($arregloApuestas[12])){$oPer->personaApuesta[12] = $arregloApuestas[12];}else{$oPer->personaApuesta[12] = '';}
			if(isset($arregloApuestas[13])){$oPer->personaApuesta[13] = $arregloApuestas[13];}else{$oPer->personaApuesta[13] = '';}
			if(isset($arregloApuestas[14])){$oPer->personaApuesta[14] = $arregloApuestas[14];}else{$oPer->personaApuesta[14] = '';}
			if(isset($arregloApuestas[15])){$oPer->personaApuesta[15] = $arregloApuestas[15];}else{$oPer->personaApuesta[15] = '';}
			if(isset($arregloApuestas[16])){$oPer->personaApuesta[16] = $arregloApuestas[16];}else{$oPer->personaApuesta[16] = '';}
			if(isset($arregloApuestas[17])){$oPer->personaApuesta[17] = $arregloApuestas[17];}else{$oPer->personaApuesta[17] = '';}
			if(isset($arregloApuestas[18])){$oPer->personaApuesta[18] = $arregloApuestas[18];}else{$oPer->personaApuesta[18] = '';}
			if(isset($arregloApuestas[19])){$oPer->personaApuesta[19] = $arregloApuestas[19];}else{$oPer->personaApuesta[19] = '';}
		

		}
		
		function setPersonaPuntos($lpersonaPuntos){
			$this->personaPuntos = $this->personaPuntos + $lpersonaPuntos;
		}
		
		function setPersonaAciertos($lpersonaAciertos){
			$this->personaAciertos = $this->personaAciertos + $lpersonaAciertos;
			}
		
		function setPersonaLimpiarAF(){
			$this->personaAciertos = 0;
			$this->personaFallos = 0;
			}
		
		function setPersonaFallos($lpersonaFallos){
			$this->personaFallos = $this->personaFallos + $lpersonaFallos;
			}
                        
                function setPersonaFecha($lpersonaFecha){
			$this->personaFecha = $lpersonaFecha;
			}
                        
                function setPersonaApuestaString($lApuestaString){
                        $lApuestaString = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $lApuestaString);
                        $this->personaApuestaString = $lApuestaString;
                }
		
		 	//	S	E	T	T	E	R
}

?>
