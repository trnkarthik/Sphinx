<?php
include("connect.php");
?>
<section id="service" class="section service">
    	<div class="container_new"> 
    		<!-- section heading -->
			<div class="row">
				<div class="span12">
                                    <div class="headline_new"><h3>Explore our <span class="color">Products</span><div id="stop3"></div></h3></div>
				</div>
			</div>
			<!-- section heading end-->
			<!-- service box -->
			
			
			<?php
			
			$result = mysql_query("SELECT * FROM sp_products where visibility=1 ORDER BY date_of_creation DESC LIMIT 5");
			?>
			<div class="row">
				
			<?php
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			    
			    ?>
			    <div class="span3 box">
				<header class="box-headline" ><h4><?php echo $row[1]; ?> </h4></header>				
				<i class="icon-beaker cls"><img src='<?php echo $row[4]; ?>'  width= 10px height=150px /></i>
				<p class="s-details"><?php echo $row[2]; ?></p>

			    </div>
			    <?php
			     
			}
			?>
			<div class="span3 box">
				<header class="box-headline" ><h4>More Products</h4></header>	
                                <div id="more"></div>
				<i class="icon-beaker cls"><img src='images/plus_final.png' /></i>
				<p class="s-details">Click here for more products</p>
                                <div id="more2"></div>
				
			    </div>
			</div>
				
        </div>		
	</section>



