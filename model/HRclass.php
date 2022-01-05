<?php

include_once 'Ilogin.php'
class hr implements Ilogin
{
	function redirect()
	{
		header("Location:../view/HRview.php");
	}

}


?>