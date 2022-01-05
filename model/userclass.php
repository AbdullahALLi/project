<?php
include_once "usertypeclass.php";
abstract class user 
{
	public $id;
	public $password;
	public $f_name;
	public $l_name;
	public $phonenumber;
	public $email;
	public $usertypeobj;
	
	function delete($id)
	{
		{
		$con = mysqli_connect("localhost", "root", "","project");

    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      $sql = "DELETE FROM user WHERE id=$id ";

      if($con->query($sql) === true)
      {
          echo'<script> alert ("user deleted ")</script>';
      }
      else
      {
      echo'<script> alert ("error")</script>';
      }
    }
	}

	}
