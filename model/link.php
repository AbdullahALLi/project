<?php

class link
{ 	public $id;
	public $type;
	function __construct($id)
	{if(!$id=="")
		{
			$con = mysqli_connect("localhost", "root", "","orphnew");
	if (!$con)
  	{
 	 die('Could not connect: ' . mysqli_error());
 	 }
 	 else
 	 {$sql="select *from usertypepages  where usertypeid='$id'";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->id=$row["id"];
 	 	$this->usertypeid=$row["usertypeid"];
 	 	$this->pageid=$row["pageid"];
 	 	

 	 	
 	 }
 	}

	}
}
	function returnlink()
	{
		return $this->pageid;
	}
}

?>



