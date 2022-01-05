<?php

class child 
{

	function delete($id){
	
		$con = mysqli_connect("localhost", "root", "","project");

    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      } else
      echo "$id";
      $sql = "DELETE FROM childwaitinglist WHERE id=$id";

      if($con->query($sql) === true)
      {
          
      }
      else
      {
      echo'<script> alert ("error")</script>';
      }
    
	}
}

?>