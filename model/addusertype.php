<?php

include_once '../model/Database.php';
class AddUsertype
{ function InsertUser($type)
    {
       $con = mysqli_connect("localhost", "root", "","project");
    
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
      /*else
      {        echo'<script> alert ("conected")</script>';


      }
      */
      $sql = "INSERT INTO usertype (type) VALUES ('$type')";

      if (mysqli_query($con, $sql))
      {
        echo'<script> alert ("usertype added")</script>';
       header("Location:../view/manegerview.php");
      }
      else
      {
      echo'<script> alert ("error")</script>';
   header("Location:../view/manegerview.php");
      }
    }
          
 }




?>