<?php session_start();
require('includes/config.php');
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
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry" style="min-height:400px">
				<form action='process_addcategory.php' method='POST'>
				<h1 style="color:darkgreen">ADD CATEGORY </h1><br><br>
						<b style="color:darkgreen">ADD CATEGORY </b>
							<br/>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  '>
							
							<br><br>
				</form>
				<hr>
				<form action='process_addsubcategory.php' method='POST'>
							
							
							
									
							
							
						<b style="color:darkgreen">DELETE CATEGORY </b>						
							<br>
								<select name="del">
									<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
											}
			
											
									?>
								</select>
						
							
							<input type='submit' value='  DELETE  '>
				</form>

				<form action='process_delsubcategory.php' method='POST'>
							<hr>
						
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<br><br><br><br><br><br><br>
<br><div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
