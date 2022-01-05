<?php
include_once 'Ilogin.php';
class manager implements Ilogin
{
	function redirect()
	{
		header("Location:../view/manegerview.php");
	}

}
?>