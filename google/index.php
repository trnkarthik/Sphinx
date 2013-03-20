<html>
    <head>
        <title>Google test</title>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    </head>
    <body>
        
    
    <span id="signinButton">
        <span
          class="g-signin"
          data-callback="signinCallback"
          data-clientid="803149563547-uce952f7uu2sq4ekhl3stfj6egoe34v9.apps.googleusercontent.com"
          data-cookiepolicy="single_host_origin"
          data-requestvisibleactions="http://schemas.google.com/AddActivity"
          data-scope="https://www.googleapis.com/auth/plus.login">
        </span>
    </span>
    

    <button id="revokeButton">Disconnect App from user</button>
    <a href="https://accounts.google.com/Logout?hl=en&amp" >Logout</a>
    <!-- Place this asynchronous JavaScript just before your </body> tag -->
    <script type="text/javascript">
        
        
        
      //var access_token;
      
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client:plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
      
      function signinCallback(authResult) {
        if (authResult['access_token']) {
          // Successfully authorized
          // Hide the sign-in button now that the user is authorized, for example:
          document.getElementById('signinButton').setAttribute('style', 'display: none');
          //alert (authResult['access_token']);
          //access_token = authResult['access_token'];
         // document.write(authResult['access_token']);
        } else if (authResult['error']) {
          // There was an error.
          // Possible error codes:
          //   "access_denied" - User denied access to your app
          //   "immediate_failed" - Could not automatially log in the user
          // console.log('There was an error: ' + authResult['error']);
        }
    }
    
    
    /*
    
    function disconnectUser() {
        
        var tokenObj = gapi.auth.getToken();
        var tokenKey = token['access_token'];
        var revokeUrl = 'https://accounts.google.com/o/oauth2/revoke?token=' + tokenKey;

//			var token = gapi.auth.getToken();
//y			var revokeUrl = 'https://accounts.google.com/o/oauth2/revoke?token=' + token['access_token'];
			$.ajax({
				type: 'GET',
				url: revokeUrl,
				async: false,
				contentType: "application/json",
				dataType: 'jsonp',
				success: function(nullResponse) { getAccount(); },
				error: function(e) {}
			});
		}
    
    
    
            $('#revokeButton').click(disconnectUser);

    
    
    */
      
      
      function disconnectUser(access_token) {
        access_token = gapi.auth.getToken().access_token;
        alert(access_token + " this is token");
        var revokeUrl = 'https://accounts.google.com/o/oauth2/revoke?token='+access_token;
        alert(revokeUrl);
        // Perform an asynchronous GET request.
        $.ajax({
          type: 'GET',
          url: revokeUrl,
          async: false,
          contentType: "application/json",
          dataType: 'jsonp',
          success: function(nullResponse) {
            // Do something now that user is disconnected
            // The response is always undefined.
          document.getElementById('signinButton').setAttribute('style', 'display: block');
          //document.write('https://accounts.google.com/o/oauth2/revoke?token=' + access_token);
          },
          error: function(e) {
            // Handle the error
            // console.log(e);
            // You could point users to manually disconnect if unsuccessful
            // https://plus.google.com/apps
                        alert("not done!");
          }
        });
        }       
        // Could trigger the disconnect on a button click
        $('#revokeButton').click(disconnectUser);
      
      
      
      
    /*  
      function render() {
    gapi.signin.render('customBtn', {
      //'callback': 'signinCallback',
      'clientid': '841077041629.apps.googleusercontent.com',
      'cookiepolicy': 'single_host_origin',
      'requestvisibleactions': 'http://schemas.google.com/AddActivity',
      'scope': 'https://www.googleapis.com/auth/plus.login'
    });
  }
  */
    </script> 
    </body>
</html>