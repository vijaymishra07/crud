<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php
     include('db.php');
 extract($_POST);
 if(isset($_POST['edit'])){
  $str = "SELECT *  FROM cratetable WHERE id = ".$user_id;
  $query=mysqli_query($convij,$str);
  $updateData = mysqli_fetch_array($query);


}
  ?>
<form action="send.php" method="post">
  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $updateData['vijay_name']; ?>">  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile No.</label>
    <input type="number" name="num" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-check">
  <input class="form-check-input" value="female" type="radio" name="radio" id="flexRadioDefault1" />
  <label class="form-check-label" for="flexRadioDefault1">
    female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="male" name="radio" id="flexRadioDefault2" <?php if($updateData['gender'] == 'male') echo 'checked' ?> />
  <label class="form-check-label" for="flexRadioDefault2">
    Male
  </label>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $updateData['city']; ?>">   
  </div>
<label for="cars">Select your state:</label>
  <select name="state" id="cars" value="<?php echo $updateData['state']; ?>">
    <option value="Chhattisgarh" <?php if($updateData['state'] == 'Chhattisgarh') echo 'selected' ?>>Chhattisgarh</option>
    <option value="Bihar" <?php if($updateData['state'] == 'Bihar') echo 'selected' ?>>Bihar</option>
    <option value="gujraat" <?php if($updateData['state'] == 'gujraat') echo 'selected' ?>>gujraat</option>
    <option value="Uttar Pradesh" <?php if($updateData['state'] == 'Uttar Pradesh') echo 'selected' ?>>Uttar Pradesh</option>
  </select>
  <br><br>
  <div class="mb-3 form-check">
    <input type="checkbox" name="term" value="Term's Accept" class="form-check-input" id="exampleCheck1">
  </div>
  <button  class="btn btn-primary" name="updateForm">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

