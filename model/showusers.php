<?php
include_once "staffclass.php";
include_once "adress.php";
include_once "observer.php";


class showusers
{
    function countt()
   { 
            $con = mysqli_connect("localhost", "root", "","orphnew");
    if (!$con)
    {
     die('Could not connect: ' . mysqli_error());
     }
     $count=0;
     $sql="select *from user";
     $userslist = array();
     $dataset = mysqli_query($con,$sql) or die(mysqli_error);
     if($row = mysqli_fetch_array($dataset))
     {
       $count++;
     }

    return $count;

}
}

        
    


?>