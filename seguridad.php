<?php
	session_start();
	
	function sesion_iniciada()
	{
		if( !$_SESSION['usuario'] )
		{
			return false;
		}	 
		else return true;
	} 

?>