<?php
$email = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['email'])){	
	}
	else{
		$email = $_POST['email'];
	}
}
?>

<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <legend><b>EMAIL</b></legend>
        <input type="text" name="email" value="<?php echo $email; ?>">i
        <br>
        <hr>
        <input type="submit" name="submit">
        <br>
        <br>
     </fieldset>
     <br>
     <label> <?php echo $email; ?></label>
    </form>
  </body>
</html>