<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
	}


?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
			<!-- end header -->
			<!-------------------------------><br><br>
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="username">Postal Code</label></p> 
    			<input id="pc" name="pc" placeholder="" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder=""> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder=""> 
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="" required="" type="text"> <br><br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>