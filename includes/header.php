         
	    <link rel="stylesheet" type="text/css" href="css/header_style.css" />
<!--
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
-->
<div class="header">
	
            <?php
            include("includes/page_slider.php");
            include("includes/login_register.php");
            ?>	

            <div class="middle">
                <h1>
                <!-- <img src="images/logo.png" style="width:250px;height:80px"/> -->
                </h1>
                <ul>
                    <li><a href="index.php"><div>Home</div></a></li>
                    <li><a href="products.php"><div>Products</div></a></li>
                    <li><a href="idea_hub.php"><div>Idea Hub</div></a></li>
                    <li><a href="about.php"><div>About Us</div></a></li>
		    <?php
			if(logged_in()){
			   echo "<li><a href='logout.php'><div>Logout</div></a></li>";
			}
		    ?>
		    
			<a id="inline" class="btn btn_red btn_position"  href="#data">
			<?php
				    if(logged_in()){
				    	echo "Hi,this is".$_SESSION['username'];
				    }
				    else{
						echo "Sign In";
				    }
				    ?>
			</a>
			
			
			<!--
			
			<div class="btn-group open">
				    <a class="btn btn-primary" href="#"><i class="icon-user"></i> User</a>
				    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
				      <span class="icon-caret-down"></span></a>
				    <ul class="dropdown-menu">
				      <li><a href="#"><i class="icon-fixed-width icon-pencil"></i> Edit</a></li>
				      <li><a href="#"><i class="icon-fixed-width icon-trash"></i> Delete</a></li>
				      <li><a href="#"><i class="icon-fixed-width icon-ban-circle"></i> Ban</a></li>
				      <li class="divider"></li>
				      <li><a href="#"><i class="i"></i> Make admin</a></li>
				    </ul>
			</div>
			
			-->
			
			
			
			<?php
				    if(!logged_in()){ ?>
						
				    		<span id="register_suggestion">or <a href="" id="register_suggestion_link">Register Here</a></span>
				    <?php }
			?>
		    
	     
                </ul>
		

            </div>



</div>
