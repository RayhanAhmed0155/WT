<?php
$bloodgrp = "";
$bloodgrp_err="";

if(empty($_POST['bloodgrp'])){
		$bloodgrp_err = "";
	}
	else{
		$bloodgrp = $_POST['bloodgrp'];
	}
?>

<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <tr>
        	<legend><b>BLOOD GROUP</b></legend>
	   
		  <td><select name= "bloodgrp">
		  <option value=""<?php if((isset($_POST['bloodgrp'])) && ($_POST['bloodgrp']=="")) echo "selected" ?>></option>
		  <option value="A+ve"<?php if((isset($_POST['bloodgrp'])) && ($_POST['bloodgrp']=="America")) echo "selected" ?>>A+ve</option>
		  <option value="B+ve" <?php if((isset($_POST['bloodgrp'])) && ($_POST['bloodgrp']=="Bangladesh")) echo "selected" ?>>B+ve</option>
		  <option value="AB-ve" <?php if((isset($_POST['bloodgrp'])) && ($_POST['bloodgrp']=="India")) echo "selected" ?>>AB-ve</option>
		     </select>
			 <label style="color:red"><?php echo $bloodgrp_err; ?></label>
			 </td>
	   </tr>
		
						
        <br>
        <hr>
        <input type="submit" name="submit">
        <br>
        <br>
     </fieldset>
     <br>
     
    </form>
    <label><?php echo $bloodgrp; ?></label><br>
  </body>
</html>