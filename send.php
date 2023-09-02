<?php
if (isset($_POST['insertForm'])) {
    extract($_POST);
    include('db.php');
    $encrypted_password = md5($vijay);
   $str = "INSERT INTO cratetable SET email='$email', password='$encrypted_password', state='$state', name='$name', city='$city', mobile_no='$num', gender='$radio'";
   $query=mysqli_query($convij,$str);
   
   if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = userList.php'>
</head>
<body>
<h2>success fully register</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
    echo "not defined";
   }
 
}

if (isset($_POST['updateForm'])) {
    extract($_POST);
    include('db.php');
   $str = "UPDATE cratetable SET email='$email', password='$vijay', state='$state', name='$name', city='$city', mobile_no='$num', gender='$radio' WHERE id=$user_id";
   $query=mysqli_query($convij,$str);
   if ($query){
       echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
   <meta http-equiv='refresh' content='3; url = userList.php'>
</head>
<body>
<h2>success fully register</h2>
<p>Plese waite ...<p>
</body>
</html>";
   }else{
    echo "not defined";
   }
 
}



?>