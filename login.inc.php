<ul>
			<li id="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h2>Sign In</h2><br>
											<b>Username:</b>
											<br><input type="text" size="30" name="usernm"><br><br>
											
											
											
											<b>Password:</b>
											<br><input type="password" size="30" name="pwd"><br><br>
											<input type="submit" id="x" value="Login" />
										</form>';
							}
						?>
			</li>
</ul>			