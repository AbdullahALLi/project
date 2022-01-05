<?php
include_once 'Ilogin.php';
class secretary implements Ilogin
{
	function redirect()
	{
		header("Location:../view/secretaryview.php");
	}

}
?>