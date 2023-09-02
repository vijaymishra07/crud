<?php
if(isset($_GET['vijay'])){
	echo 'Successfully Delted';
}

 include('db.php');
   $str = "SELECT * FROM cratetable ";
   $query=mysqli_query($convij,$str);

   if ($query){
   	echo "<table border='2'>
     				<tr><th>Name</th><th>Email</th><th>Mobile No</th><th>Action</th></tr>";
     	while($row = mysqli_fetch_array($query)){
     		$user_id = $row['id'];
     		$name = $row['name'];
     		$email = $row['email'];
     		$MobileNo = $row['mobile_no'];
     		echo "<tr><td>".$name."</td>
		     		<td>".$email."</td>
		     		<td>".$MobileNo."</td>
		     		<td>
		     		<form action='api.php' method='post'>
		     			<input type='hidden' name='user_id' value='".$user_id."'>
		     			<button name='delete'>cancel<button>
		     		</form>
		     		<form action='update.php' method='post'>
		     			<input type='hidden' name='user_id' value='".$user_id."'>
		     			<button name='edit'>Edit</button>
		     		</form>
		     		</td>
	     		</tr>";
   	}
   echo "</table>";
   }else{
   	echo "sorry";
   }
?>