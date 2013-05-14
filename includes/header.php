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
                </ul>
            </div>
            <a id="inline" href="#data">Login</a>



</div>
