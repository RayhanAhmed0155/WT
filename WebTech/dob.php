<?php
$dob = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['dob'])){	
	}
	else{
		$dob = $_POST['dob'];
	}
}
?>

<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <legend><b>DATE OF BIRTH</b></legend>
        <input type="date" name="dob" value="<?php echo $dob; ?>">
        <br>
        <hr>
        <input type="submit" name="submit">
        <br>
        <br>
     </fieldset>
     <br>
     <label><?php echo $dob; ?></label>
    </form>
  </body>
</html>