<?php session_start(); ?>



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
					
								<div class="post">
									<h1 class="title">Welcome to Registration......</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table>
											<form action="process_register.php" method="POST">
											
												<tr>
													<td><div class="t"><b>Full Name :</b>&nbsp;&nbsp;</td> </div>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><div class="t"><b>User Name :</b>&nbsp;&nbsp;</td></div>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><div class="t"><b>Password :</b>&nbsp;&nbsp;</td></div>
													<td><input type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><div class="t"><b>Confirm Password:</b>&nbsp;&nbsp;</td></div>
													<td><input type='password' name='cpwd' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												</div>
												<tr>
													<td><div class="t"><b>Gender:</b>&nbsp;&nbsp;</td></div>
													<td><div class="t"><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td></div>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><div class="t"><b>E-mail Address:</b>&nbsp;&nbsp;</td></div>
													<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><div class="t"><b>Contact No.:</b>&nbsp;&nbsp;</td></div>
													<td><input type='text' name='contact' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><div class="t"><b>City:</b>&nbsp;&nbsp;</td></div>
													<td>
													<select style="width: 295px;" name="city">
														
															<option>Mohammadpur
															<option>Framget
															<option>Mohakhali
															<option>Gabtoli
															<option>Sheymoli
															<option>Nurjahanroad
															<option>Adabor
															<option>Gulshan
															<option>Dhanmondi
															<option>Uttora
															<option>Banani
															<option>College Gate
															<option>Bosila
															
														
													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												
												<tr>
													<td colspan='8' align='center'>
														<input type='submit'value="  OK  ">
													</td>
												</tr>
												
											</form>
										</table>
									</div>
									
								</div>
					
					
							</div>
				
						<!-- end content -->
						
						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div>
						<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>
