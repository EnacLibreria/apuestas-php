<?php

class GanadoresTO
{


private $ganadores;
private $ppvID;
private $ppvNombre; 
private $ppvSlots;
private $ppvSlotsSinExtras;
private $arregloPuntosExtra;

			//	C	O	N	S	T	R	U	C	T	O	R

	function GanadoresTO()
	{
	$this->ganadores = array();
	$this->ppvID = '';
	$this->ppvNombre = '';
	$this->ppvSlots = 0;
	$this->ppvSlotsSinExtras = 0;
	$this->arregloPuntosExtra = array();
	}
			//	C	O	N	T	R	U	C	T	O	R	
			
			//	G	E	T	T	E	R

		function getGanadores(){
		return $this->ganadores;
		}
		
		function getppvID(){
			return $this->ppvID;
			}
			
		function getppvNombre(){
			return $this->ppvNombre;
			}
			
		function getppvSlots(){
			return $this->ppvSlots;
			}

		function getppvSlotsSinExtras(){
			return $this->ppvSlotsSinExtras;
			}
			
		function getPuntosExtra(){
			return $this->arregloPuntosExtra;
			}
			//	G	E	T	T	E	R

			//	S	E	T	T	E	R
			
		function setppvID($lppvid){
			$this->ppvID = $lppvid;
			}
			
		function setppvNombre($lppvNombre){
			$this->ppvNombre = $lppvNombre;
			}
				
		function setppvSlots($lppvSlots){
			$this->ppvSlots = $lppvSlots;
			}
			
		function setppvSlotsSinExtras($lppvSlotsSinExtras){
			$this->ppvSlotsSinExtras = $lppvSlotsSinExtras;
			}

		function setGanadores($lganadores){
			
			$param = sizeof($lganadores);
			$this->ganadores = array($param);
		
				for($i=0;$i < $param; $i++)
				{
					$this->ganadores[$i] = $lganadores[$i];
				}

		}
		
		function setPuntosExtra($arregloPuntosExtra){
			
			$param = sizeof($arregloPuntosExtra);
			$this->arregloPuntosExtra = array($param);
		
				for($i=0;$i < $param; $i++)
				{
					$this->arregloPuntosExtra[$i] = $arregloPuntosExtra[$i];
				}

		}
			
		
			//	S	E	T	T	E	R

		
		
}

?>
