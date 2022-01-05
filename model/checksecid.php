<?php
class secidCheck
{
    function Checksecid($id)
    {
         $con = mysqli_connect("localhost", "root", "","project");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

        $query = "select * from user where id='$id' and usertypeid='4'";



         $resultD = mysqli_query($con,$query);
         if ($resultD) {
            if($resultD && mysqli_num_rows($resultD) > 0)
                {


                   echo'<script>alert("secid found")</script>';
                   return 1;
                }
                else
                {
             echo'<script>alert("wrong secid")</script>';
                header("Location:../view/createform.php");
             return 0;
                }



        }
    }
}