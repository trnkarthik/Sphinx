
<script type="text/javascript">
                var x=1;
                function doChange()
                {
                    var output="";
                    if(x==0)
                    {
                        x=1;
                        output="<form class=\"login_reg_form\"><p class=\"field\"><input type=\"text\" name=\"login\" placeholder=\"Username or email\"><i class=\"icon-user icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
                        document.getElementById("registrationButton").innerHTML="<img src='images/registration.gif' style=\"width:100px;height: 26px;\" />";
                        document.getElementById("headerText").innerHTML="<center><h2>Login</h2></center>";
			    
			    
                    }
                    else
                    {
                        document.getElementById("headerText").innerHTML="<center><h2>Registration</h2></center>";
                        output="<form class=\"login_reg_form\"><p class=\"field\"><input type=\"text\" name=\"login\" placeholder=\"Username or email\"><i class=\"icon-user icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p style=\"padding-top:10px\" class=\"field\"><input type=\"password\" name=\"repassword\" placeholder=\"Retype Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
                        document.getElementById("registrationButton").innerHTML="<img src='images/loginButton.png'  style=\"width:100px;height: 26px;\"  />";
			    
                        x=0; 
                    }
                    document.getElementById("formButton").innerHTML=output;
                }
		    
            </script>
        <div style="display:none"><div id="data">
                <table style="margin-left: 20px;">
                    <tr><td  style="padding-right:30px;"  valign="top">
                            <div id="headerText"><center><h2>Login</h2></center></div>

                            <div id="formButton">
                                <form class="login_reg_form">
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
                            <table><tr><td style="padding-right:10px;padding-left:10px"><a href="#"><img src="images/fbloginButton1.png" style="width:72px" /></a></td>
                                    <td style="padding-right:10px"><a href="#"><img src="images/googleLoginButton.png" style="width:100px" /></a></td>
                                    <td><a href="#" onclick="doChange()" id="registrationButton"><img src="images/registration.gif" style="width:100px;height: 26px;" /></a></td>

                                </tr></table>

                        </td></tr>
                </table>

            </div></div>
        <script>
		    
            $("a#inline").fancybox({
                'openEffect'	:	'fade',
                'transitionOut'	:	'elastic',
                'openSpeed '		:	1600, 
                'speedOut'		:	1200, 
                'overlayShow'	:	true,
                'hideOnContentClick': true
            });
            $('.fancybox-inner').width(500);    
        </script>