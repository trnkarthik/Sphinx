  
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<style>
    #login_options{
        position: absolute;
        top: 0px;
        left: 400px;
        height: 100%;
        padding-top: 40px;
        padding-left: 40px;
        border-left: 1px solid #E2E2E2;
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
    .login_button_img{
        width: 176px;
        height: 32px;
        margin-bottom: 10px;
        -webkit-box-shadow: 0px 0px 1px #CCC;
        -webkit-border-radius: 6px;
    }
    #register_button{
        font-size: 12px;
        -webkit-font-smoothing: antialiased;
        font-weight: bold;
        border-radius: 7px;
        line-height: 14px;
        min-width: 15px;
        min-height: 28px;
        max-width: 176px;
        padding: 4px;
        text-align: center;
        border: 1px solid #CCC;
        font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        color: #000;
        background: #52CFEB;
        background: -moz-linear-gradient(#52CFEB, #42A2BC);
        background: -ms-linear-gradient(#52CFEB, #42A2BC);
        background: -o-linear-gradient(#52CFEB, #42A2BC);
        background: -webkit-gradient(linear, 0 0, 0 100%, from(#52CFEB), to(#42A2BC));
        background: -webkit-linear-gradient(#52CFEB, #42A2BC);
        background: linear-gradient(#52CFEB, #42A2BC);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 1px rgba(0, 0, 0, 0.35), inset 0 1px 1px rgba(255, 255, 255, 0.2), inset 0 -1px 1px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }
    #register_button:hover{
        background: #52CFEB;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
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
            //			    document.getElementById("register_button").innerHTML="<img src='images/registration.gif' style=\"width:100px;height: 26px;\" />";
            $(".register_button").html("<img src='images/registration.gif' style=\"width:100px;height: 26px;\" />");
            //			    document.getElementById("headerText").innerHTML="<center><h2>Login</h2></center>";
            $(".headerText").html("<center><h2>Login</h2></center>");
            //                            alert(document.getElementById("registrationButton").innerHTML);
        }
        else
        {
            $(".headerText").html("<center><h2>Registration</h2></center>");
            //document.getElementById("headerText").innerHTML=;
            output="<form class=\"login_reg_form\" action=\"includes/register.php\" method=\"post\" ><p class=\"field\"><input type=\"text\" name=\"user_name\" placeholder=\"Full name\"><i class=\"icon-user icon-large\"></i><p class=\"field\"><input type=\"text\" name=\"user_email\" placeholder=\"Email\"><i class=\"icon-envelope-alt icon-large\"></i></p><p class=\"field\"><input type=\"password\" name=\"password\" placeholder=\"Password\"><i class=\"icon-lock icon-large\"></i></p><p style=\"padding-top:10px\" class=\"field\"><input type=\"password\" name=\"repassword\" placeholder=\"Retype Password\"><i class=\"icon-lock icon-large\"></i></p><p class=\"submit\"><button type=\"submit\" name=\"submit\"><i class=\"icon-arrow-right icon-large\"></i></button></p></form>";
            $(".register_button").html("<img src='images/loginButton.png'  style=\"width:100px;height: 26px;\"  />");
            //   document.getElementById("register_button").innerHTML=;			    
            x=0;
            // $(".register_button").html("<center><h2>Register</h2></center>");
            //document.getElementById("headerText").innerHTML = "<center><h2>Register</h2></center>";
            //                            alert(document.getElementById("registrationButton").innerHTML);
        }
                        
        $(".formButton").html(output);
        // document.getElementById("formButton").innerHTML=output;
        //                             alert("headerText: "+document.getElementById("headerText").innerHTML + "...output: "+document.getElementById("formButton").innerHTML);
        return false;
    }		    
</script>        
<div style="">
    <div id="data" style="background: red; display:none">


        <div class="headerText">
            <center>
                <h2>Login</h2>
            </center>
        </div>	

        <div class="formButton">
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
                <img src="images/fbloginButton1.png" class="login_button_img"/>
            </a>
            <br/>
            <a href="?provider=Google">
                <img src="images/googleLoginButton.png" class="login_button_img" />
            </a>
            <br/>
            <a href="#" onclick="doChange()" class="registrationButton">
                <div id="register_button" >Register New Account</div>
            </a>	
        </div>	
    </div>
</div>

<script type="text/javascript" charset="utf-8">
	   
    $(document).ready(function(){
        $("a#inline").prettyPhoto({
            default_width: 650,
            default_height: 200,
            theme:'facebook',
            social_tools : false,
            animation_speed : 'fast',
            hideflash : true
        });
    });
	    
	    
</script>
