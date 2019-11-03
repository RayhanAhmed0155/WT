<?php
$gender = "";
 if(isset($_POST['submit']))
    {
        if(isset($_POST['gender']))
        {
            echo "Gender : ".$_POST['gender'];
        }
        else
        {
            echo "Please select your gender !";
        }
    }
?>

<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <tr>
        	<legend><b>GENDER</b></legend>
	   <!--<td><label><b>GENDER</label><label style="color:red">*</label></td>-->
		  
		
		    <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other
		     </select>
			 <label style="color:red"><?php echo $gender; ?></label>
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
	
    <label><?php echo $gender; ?></label><br>
  </body>
</html>

