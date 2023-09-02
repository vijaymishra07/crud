<?php
 	$temp_name = $_FILES['vijay']['tmp_name'];
 	$real_name = "myupload/".$_FILES['vijay']['name'];

 	
 	move_uploaded_file($temp_name, $real_name);

?>