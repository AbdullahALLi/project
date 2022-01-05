<?php
include_once "Database.php";
class DonationCheck
{
    function CheckDon($id)
    {
         $con = mysqli_connect("localhost", "root", "","project");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

        $query = "select * from donationdetails where id='$id'";



         $resultD = mysqli_query($con,$query);
         if ($resultD) {
            if($resultD && mysqli_num_rows($resultD) > 0)
                {


                   echo'<script>alert("Donations found")</script>';
                }
                else
                {
             echo'<script>alert("No dontaions found")</script>';
                }



        }
    }
}
?>