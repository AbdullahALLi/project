<?php
class usertypecheck
{ function returnusertype($id)
	{{
         $con = mysqli_connect("localhost", "root", "","project");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

        $query = "select * from user where id='$id'";



         $resultD = mysqli_query($con,$query);
         if ($resultD) {
            if($resultD && mysqli_num_rows($resultD) > 0)
                { 


                  retu
                }
                else
                {
             echo'<script>alert("No dontaions found")</script>';
                }



        }
    }


	}


}