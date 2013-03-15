<html>
    
    <head>
        
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--
	<script src="js/jquery-1.9.1.js"></script> -->
	<script src="js/jquery-ui-1.10.1.custom.js"></script>

<script src="js/jquery.roundabout.js"></script>
        
        
        <style>
            html, body {
	height: 100%;
	padding: 0;
	margin: 0;
}
body {
	min-height: 500px;
	background-color: #f6f6e6;
}
body * {
	font-family: Arial, Geneva, SunSans-Regular, sans-serif;
	font-size: 14px;
	color: #333;
	line-height: 22px;
}
#wrapper {
	width: 900px;
	height: 400px;
	margin: -200px 0 0 -450px;
	position: absolute;
	top: 50%;
	left: 50%;
}
#carousel img {
	display: block;
	float: left;
	border: none;
	position: relative;
}
        </style>
        
        <script>
            
            $(function() {
	var _center = {
		width: 600,
		height: 400,
		marginLeft: 0,
		marginTop: 0,
		marginRight: 0
	};
	var _left = {
		width: 300,
		height: 200,
		marginLeft: 0,
		marginTop: 150,
		marginRight: -150
	};
	var _right = {
		width: 300,
		height: 200,
		marginLeft: -150,
		marginTop: 150,
		marginRight: 0
	};
	var _outLeft = {
		width: 150,
		height: 100,
		marginLeft: 150,
		marginTop: 200,
		marginRight: -200
	};
	var _outRight = {
		width: 150,
		height: 100,
		marginLeft: -200,
		marginTop: 200,
		marginRight: 50
	};
	$('#carousel').carouFredSel({
		width: 900,
		height: 400,
		align: false,
		items: {
			visible: 3,
			width: 100
		},
		scroll: {
			items: 1,
			duration: 400,
			onBefore: function( data ) {
				data.items.old.eq( 0 ).animate(_outLeft);
				data.items.visible.eq( 0 ).animate(_left);
				data.items.visible.eq( 1 ).animate(_center);
				data.items.visible.eq( 2 ).animate(_right).css({ zIndex: 1 });
				data.items.visible.eq( 2 ).next().css(_outRight).css({ zIndex: 0 });
 
				setTimeout(function() {
					data.items.old.eq( 0 ).css({ zIndex: 1 });
					data.items.visible.eq( 0 ).css({ zIndex: 2 });
					data.items.visible.eq( 1 ).css({ zIndex: 3 });
					data.items.visible.eq( 2 ).css({ zIndex: 2 });
				}, 200);
			}
		}
	});
	$('#carousel').children().eq( 0 ).css(_left).css({ zIndex: 2 });
	$('#carousel').children().eq( 1 ).css(_center).css({ zIndex: 3 });
	$('#carousel').children().eq( 2 ).css(_right).css({ zIndex: 2 });
	$('#carousel').children().eq( 3 ).css(_outRight).css({ zIndex: 1 });
});
            
        </script>
        
        
    </head>
    
    
    <body>
        
        <div id="wrapper">
	<div id="carousel">
		<img src="img/fireworks1.jpg" width="600" height="400" />
		<img src="img/fireworks2.jpg" width="600" height="400" />
		<img src="img/fireworks3.jpg" width="600" height="400" />
		<img src="img/fireworks4.jpg" width="600" height="400" />
		<img src="img/fireworks5.jpg" width="600" height="400" />
	</div>
</div>
        
        
    </body>
    
    
</html>