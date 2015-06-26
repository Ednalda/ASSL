
<html>
	<head>
	    <title>Welcome | CuttingOff</title>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>"> 
	</head>
	    <body>
	    	<script>
				  window.fbAsyncInit = function() {
				    FB.init({
				      appId      : '884772851569521',
				      xfbml      : true,
				      version    : 'v2.3'
				    });
				  };

				  (function(d, s, id){
				     var js, fjs = d.getElementsByTagName(s)[0];
				     if (d.getElementById(id)) {return;}
				     js = d.createElement(s); js.id = id;
				     js.src = "//connect.facebook.net/en_US/sdk.js";
				     fjs.parentNode.insertBefore(js, fjs);
				   }(document, 'script', 'facebook-jssdk'));
			</script>
	    	<div id="home">
			    	<div id="signup_link"><?php echo anchor ('form/signup','Sign Up'); ?></div>
			    	<div id="title">
			    		<ul>
			    			<li class="brand_cutting">Cutting</li>
			    		    <li class="brand_off">Off</li>
			    		</ul>
                    </div>