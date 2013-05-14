  
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
       
<style>
	    #login_options{
			position: absolute;
			top: 0px;
			left: 400px;	
			height: 100%;
			padding-top: 45px;
			padding-left: 40px;
			border-left: 1px solid #E2E2E2;
	    }
	    #login_options a{
			padding :15px
	    }
	    #formButton{
			position: relative;
			top: 15px;
	    }
	    .fancybox-skin{
			background: red;
	    }
	    #headerText h2{
			font-family: Georgia, Times, "Times New Roman", serif;
			font-weight: normal;
	    }
	    
</style>

<script type="text/javascript">
	    var x=1;
	    function doChange()
	    {
			var output="";
			if(x==0)
			{
			    x=1;
			    output="<form class=\"login_reg_form\" action=\"includes/login_check.php\" method=\"post\" ><p class=\"field\"><input type=\"text\" name=\"login\" placeholder=\"Username or email\"><i class=\"icon-user icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
			    document.getElementById("registrationButton").innerHTML="<img src='images/registration.gif' style=\"width:100px;height: 26px;\" />";
			    document.getElementById("headerText").innerHTML="<center><h2>Login</h2></center>";   
			}
			else
			{
			    document.getElementById("headerText").innerHTML="<center><h2>Registration</h2></center>";
			    output="<form class=\"login_reg_form\" action=\"includes/register.php\" method=\"post\" ><p class=\"field\"><input type=\"text\" name=\"user_name\" placeholder=\"Full name\"><i class=\"icon-user icon-large\"></i><p class=\"field\"><input type=\"text\" name=\"user_email\" placeholder=\"Email\"><i class=\"icon-envelope-alt icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p style=\"padding-top:10px\" class=\"field\"><input type=\"password\" name=\"repassword\" placeholder=\"Retype Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
			    document.getElementById("registrationButton").innerHTML="<img src='images/loginButton.png'  style=\"width:100px;height: 26px;\"  />";			    
			    x=0;
			}
			    document.getElementById("formButton").innerHTML=output;
	    }		    
</script>
             
<div style="display:none">
	<div id="data" style="background: red">
	        	<div id="headerText">
				    <center>
				    <h2>Login</h2>
				    </center>
		        </div>	
				    <div id="formButton">
				           <form class="login_reg_form" action="includes/login_check.php" method="post">
						<p class="field">
	    					<input type="text" name="login" placeholder="Username or email">
	    					<i class="icon-user icon-large"></i>
						</p>
						<p class="field">
						<input type="password" name="password" placeholder="Password">
						<i class="icon-lock icon-large"></i>
						</p>
						<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
						</p>
				           </form>
				    </div>

				    <div id="login_options">
					<a href="#">
						    <img src="images/fbloginButton1.png" style="width:72px;height: 36px;padding-bottom:10px" />
						</a>
					<br/>
						<a href="?provider=Google">
							    <img src="images/googleLoginButton.png" style="width:100px;height: 36px;padding-bottom:10px" />
						</a>
						<br/>
					    	<a href="#" onclick="doChange()" id="registrationButton">
						    <img src="images/registration.gif" style="width:100px;height: 36px;padding-bottom:10px" />
					    	</a>	
				    </div>	
            </div>
</div>
	
	<script type="text/javascript" charset="utf-8">
	   
	   
	    $(document).ready(function(){
			$("a#inline").prettyPhoto({
				    default_width: 610,
				    default_height: 200,
				    theme:'facebook',
				    social_tools : false,
				    animation_speed : 'fast',
				    hideflash : true,
			});
	    });
	    
	    
	</script>