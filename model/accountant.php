<?php
include_once 'Ilogin.php'
class accountant implements Ilogin
{
	function redirect()
	{
		header("Location:../view/accountantview.php");
	}

}


?>