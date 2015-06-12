
                


                    <div id="signup">
						
						<?php echo form_open('form/signup'); ?>
						<?php echo validation_errors(); ?>
							<h3>How many calories in your recipe?</h3>
							<ul class="signup_data">
								  <?php
								  echo form_open('form/signup');
								  echo '<p>Username &nbsp';  
								  echo form_input('username'); 
								  echo '</p>';
								  echo '<p>Email &nbsp';  
								  echo form_input('email'); 
								  echo '</p>';
								  echo '<p>Password &nbsp'; 
								  echo form_password('password');
								  echo '</p>';   
								  echo '<p>Confirm Password &nbsp'; 
								  echo form_password('confirm_password');
								  echo '</p>';   
								  echo form_submit('submit', 'Register', 'class= signup_btn');
								  echo form_close(); 
								  ?>
					
                    </div>
                </div>
