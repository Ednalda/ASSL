                    
               <script>
                        function statusChangeCallback(response) {
							    console.log('statusChangeCallback');
							    console.log(response);
							   
							    if (response.status === 'connected') {
							      // Logged into your app and Facebook.
							      testAPI()

							    } else if (response.status === 'not_authorized') {
							      // The person is logged into Facebook, but not your app.
							      document.getElementById('status').innerHTML = 'Please log ' +
							        'into this app.';
							    } else {
							      // The person is not logged into Facebook, so we're not sure if
							      // they are logged into this app or not.
							      document.getElementById('status').innerHTML = 'Please log ' +
							        'into Facebook.';
							    }

                        });

					    FB.login(function(response) {
								  if (response.status === 'connected') {
								    // Logged into your app and Facebook.
								   window.location.assign(('//localhost:888/cutting/index.php/form');
								  } else if (response.status === 'not_authorized') {
								    // The person is logged into Facebook, but not your app.
								  } else {
								    // The person is not logged into Facebook, so we're not sure if
								    // they are logged into this app or not.
								}{scope: 'public_profile,email'}
						});
						
                   
						window.fbAsyncInit = function() {
							  FB.init({
							    appId      : '884772851569521',
							    cookie     : true,  // enable cookies to allow the server to access 
							    channelUrl : '//http://localhost:888/cutting/index.php/form/channel.html',
							    status     : false,                 
							    xfbml      : true,  // parse social plugins on this page
							    logging    : true,
							    version    : 'v2.0' // use version 2.0
						       });

						 }


							 
                        
                            <div id="fb-root"></div>
							(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=884772851569521";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
						    };
					


						    function checkLoginState() {
						    FB.getLoginStatus(function(response) {
						      statusChangeCallback(response);
						    });
						  }

						
						

						
						function testAPI() {
						    console.log('Welcome!  Fetching your information.... ');
						    FB.api('/me', function(response) {
						     document.getElementbyId('fb-login-button').value = 
                                            "Logged in as " + response.name;
						    });
						}
       
						
              </script>

						
						 
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
					  <?php  echo form_open ("form/user");?>
					     <div id="fb-root"> </div>
					   	
                         <div class="fb-login-button" scope="public_profile,email" data-max-rows="1"
                          data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
						
					     <div id="status"></div>
					   </form>
					</div>

					

					
                    

					
			</div>
 
 