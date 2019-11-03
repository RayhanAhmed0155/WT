<?php
$degree="";
if(isset($_POST['submit']))
    {
        if(isset($_POST['ssc']))
        {
            echo $_POST['ssc']." ";
        }
        if(isset($_POST['hsc']))
        {
            echo $_POST['hsc']." ";
        }
        if(isset($_POST['bsc']))
        {
            echo $_POST['bsc']." ";
        }
        if(isset($_POST['msc']))
        {
            echo $_POST['msc']." ";
        }
        
    }
?>

<html>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <fieldset style="width:270px" >
        <legend><b>DEGREE</b></legend>
		
        <input type="checkbox" name="ssc" value="SSC">SSC
            <input type="checkbox" name="hsc" value="HSC">HSC
            <input type="checkbox" name="bsc" value="BSc">BSc
            <input type="checkbox" name="msc" value="MSc">MSc
            <br>
          			
        <br>
        <hr>
        <input type="submit" name="submit">
        <br>
        <br>
     </fieldset>
     <br>
     <label><?php echo $degree; ?></label>
    </form>
  </body>
</html>