<?php
include_once "../model/userclass.php";

class usertype extends user
{
	public $id;
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
 	 {$sql="select *from usertype where id=$id";
 	 $dataset = mysqli_query($con,$sql) or die(mysqli_error);
 	 if($row = mysqli_fetch_array($dataset))
 	 {
 	 	$this->id=$row["id"];
 	 	$this->type=$row["type"];

 	 	
 	 }
 	}

	}
}
	function delete($id){
	
		$con = mysqli_connect("localhost", "root", "","project");

    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      $sql = "DELETE FROM usertype WHERE id= $id";

      if($con->query($sql) === true)
      {
          echo'<script> alert ("usertype deleted ")</script>';
      }
      else
      {
      echo'<script> alert ("error")</script>';
      }
    
	}

}