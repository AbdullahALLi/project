<?php

include_once '../model/Database.php';

class updateClass {
 private $db;

    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }


   
       public function UpdateUser($id,$password,$f_name,$l_name,$phonenumber,$email,$usertypeid,$salary)
    {
        
        $sql = "UPDATE user SET f_name=?, l_name=?, salary=?, phonenumber=?,password=?,email=? WHERE id=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $param_name, $param_lname, $param_salary,$param_phonenumber,$param_password,$param_email,$param_id);

            // Set parameters
            $param_name = $f_name;
            $param_lname = $l_name;
            $param_salary = $salary;
            $param_id = $id;
            $param_phonenumber=$phonenumber;
            $param_password=$password;
            $param_email=$email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
echo'<script> alert ("user added")</script>'; 
header("Location:../view/manegerview.php");
           } 
else {
                return false;
            }
        }
      
        /*header("Location:../view/manegerview.php");
      }
      else
      {
      echo'<script> alert ("error")</script>';

      }
      */
    
    }
}


