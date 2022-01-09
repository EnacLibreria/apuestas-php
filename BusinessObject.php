<?php

include("../TO/PersonaTO.php");
include("../TO/ganadoresTO.php");	
include("../DAO/PersonaDAO.php");	

Class BusinessObject{

	function BusinessObject(){}
		
	 
		function crearApuesta($PersonaNombre, $Apuestas, $ppvID)
		{
		
			$daoPer = new PersonaDAO();
			$oGan = new GanadoresTO();
			$oPer = new PersonaTO();

			$oPer->setPersonaNombre($PersonaNombre);
			$oPer->setPersonaApuesta($oPer, $Apuestas);
			$oGan->setppvID($ppvID);
			$daoPer->crearApuesta($oPer, $oGan);
		}
		


	function EscribirAciertosFallos($ppvID, $ppvSlots, $ppvSlotsSinExtras, $PuntosExtra)
	{
		
			$oGan = new GanadoresTO();
			$oPer = new PersonaTO();
			$daoPer = new PersonaDAO();
		
			$oGan->setppvID($ppvID);
			$oGan->setppvSlots($ppvSlots);
			$oGan->setppvSlotsSinExtras($ppvSlotsSinExtras);
			$oGan->setPuntosExtra($PuntosExtra);
			
			$daoPer->EscribirAciertosFallos($oGan);
	}

		function EscribirAciertosFallos2($ppvID)
	{
		
			$oGan = new GanadoresTO();
			$oPer = new PersonaTO();
			$daoPer = new PersonaDAO();
		
			$oGan->setppvID($ppvID);			
			$daoPer->EscribirAciertosFallos2($oGan);
	}

	function EscribirTablaPuntos($ppvID)
	{
		$daoPer = new PersonaDAO();
		
		$daoPer->EscribirTablaPuntos($ppvID);
	}

	function EscribirTablaPuntos2($ppvID)
	{
		$daoPer = new PersonaDAO();
		
		$daoPer->EscribirTablaPuntos2($ppvID);
	}

	function MostrarTablaTotal($ppvID)
	{
		$daoPer = new PersonaDAO();
		
		$daoPer->MostrarTablaTotal($ppvID);
	}

		
	function IngresarPuntaje($Usuario, $ppvNombre, $Aciertos, $Fallos)
	{
		$oPer = new PersonaTO();
		$oGan = new GanadoresTO();
		$daoPer = new PersonaDAO();
		
		$oPer->setPersonaNombre($Usuario);
		$oPer->setPersonaAciertos($Aciertos);
		$oPer->setPersonaFallos($Fallos);
		$oGan->setppvNombre($ppvNombre);
		
		$daoPer->IngresarPuntaje($oPer, $oGan);
	}
	
	function ComboboxUsuarios()
	{
		$daoPer = new PersonaDAO();
		$result = $daoPer->ComboboxUsuarios();
		return $result;
	}
	
		function ComboboxPPVs()
	{
		$daoPer = new PersonaDAO();
		$result = $daoPer->ComboboxPPVs();
		return $result;
	}

	/*function MostrarGanadores($ppvID)
	{
		$daoPer = new PersonaDAO();
		$oGan = new GanadoresTO();

		$oGan->setppvID($ppvID);
		$result = $daoPer->MostrarGanadores($oGan);
		return $result;
	}*/
	
		function UpdateGanadores($ppvID, $arreglo)
	{
		$daoPer = new PersonaDAO();
		$oGan = new GanadoresTO();
		
		$oGan->setGanadores($arreglo);
		$oGan->setppvID($ppvID);
		
		$result = $daoPer->UpdateGanadores($oGan);
		return $result;
	}
	
		function UpdatePuntaje($UsuarioID, $ppvID, $Aciertos, $Fallos)
	{
		$daoPer = new PersonaDAO();
		$oPer = new PersonaTO();
		$oGan = new GanadoresTO();
		
		$oPer->setPersonaID($UsuarioID);
		$oPer->setPersonaAciertos($Aciertos);
		$oPer->setPersonaFallos($Fallos);
		$oGan->setppvID($ppvID);
		
		$result = $daoPer->UpdatePuntaje($oPer, $oGan);
		return $result;
	}

		function ingresar($usuario, $contra)
	{
		$daoPer = new PersonaDAO();
		$result = $daoPer->ingresar($usuario, $contra);
		return $result;
	}
	
			function listarPPVsinTabla()
	{
		$daoPer = new PersonaDAO();
		$result = $daoPer->listarPPVsinTabla();
		return $result;
	}
	
			function parsear($link)
	{
		$daoPer = new PersonaDAO();
		$oPer = new PersonaTO();
		
		$Apuesta = $daoPer->ParsearPosteo($link);
		$Apuesta = $daoPer->validarPosteo($Apuesta);
		return $Apuesta;
	}
	
			function insertarapuestaparseada($Apuesta)
	{
		$daoPer = new PersonaDAO();
		
		$result = $daoPer->insertarapuestaparseada($Apuesta);
		return $result;
	}
}
?>
