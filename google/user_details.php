<html>
<head>
  <title>Demo: Getting an email address using the Google+ Sign-in button</title>
  <style type="text/css">
  .hide { display: none;}
  .show { display: block;}
  </style>
  <script src="https://apis.google.com/js/plusone.js" type="text/javascript"></script>
  <script type="text/javascript">
  /*
   * Triggered when the accepts the the sign in, cancels, or closes the
   * authorization dialog.
   */
  function loginFinishedCallback(authResult) {
    if (authResult) {
      if (authResult['error'] == undefined){
        gapi.auth.setToken(authResult); // Store the returned token.
        toggleElement('signin-button'); // Hide the sign in upon successful sign in.
        getEmail();                     // Trigger request to get the email address.
      } else {
        console.log('An error occurred');
      }
    } else {
      console.log('Empty authResult');  // Something went wrong
    }
  }

  /*
   * Initiates the request to the userinfo endpoint to get the user's email
   * address. This function relies on the gapi.auth.setToken containing a valid
   * OAuth access token.
   *
   * When the request completes, the getEmailCallback is triggered and passed
   * the result of the request.
   */
  function getEmail(){
    // Load the oauth2 libraries to enable the userinfo methods.
    gapi.client.load('oauth2', 'v2', function() {
          var request = gapi.client.oauth2.userinfo.get();
          request.execute(getEmailCallback);
        });
  }

  function getEmailCallback(obj){
    var el = document.getElementById('email');
    var email = '';

    if (obj['email']) {
      email = 'Email: ' + obj['email'];
    }

    //console.log(obj);   // Uncomment to inspect the full object.

    el.innerHTML = email;
    toggleElement('email');
  }

  function toggleElement(id) {
    var el = document.getElementById(id);
    if (el.getAttribute('class') == 'hide') {
      el.setAttribute('class', 'show');
    } else {
      el.setAttribute('class', 'hide');
    }
  }
  </script>
</head>
<body>
    

    
  <div id="signin-button" class="show">
     <div class="g-signin"
          data-callback="loginFinishedCallback"
      data-approvalprompt="force"
      data-clientid="803149563547-uce952f7uu2sq4ekhl3stfj6egoe34v9.apps.googleusercontent.com"
      data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
      data-height="short"
      data-cookiepolicy="single_host_origin"
      >
    </div>
  </div>

  <div id="email" class="hide"></div>
</body>
</html>