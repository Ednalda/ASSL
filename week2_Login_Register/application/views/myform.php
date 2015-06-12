
		            <div id="login">
						<h3>How many calories in your recipe?</h3>
						<?php

						  echo form_open('form');
						  echo validation_errors();
						  echo '<ul>';
						  echo '<li>Email:</li>'; 
						  echo '<li class="email">';
						  echo form_input('email');
						  echo '</li>' ;
						  echo '</ul>';
						  echo '<ul>';
						  echo '<li>Password:</li>'; 
						  echo '<li class="password">';
						  echo form_password('password');  
						  echo '</li>';
						  echo '</ul>';
						  echo form_submit('submit', 'Login', 'class="login_btn"');
						  echo form_close(); 
						?>
					</div>
			</div>
 
 