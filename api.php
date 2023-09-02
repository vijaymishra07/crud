<?php
extract($_POST);
include "db.php";
 if(isset($_POST['delete'])){
  $str = "DELETE FROM cratetable WHERE id = ".$user_id;
  $query=mysqli_query($convij,$str);
   if ($query){
    header("Location: userList.php?vijay=ok");
  
    }else{
      echo "sorry";
    }
 }
 
?>