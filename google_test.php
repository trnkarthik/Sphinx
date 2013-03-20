<?php
$path = $_SERVER['DOCUMENT_ROOT'];
//$client_id, $client_secret, $demo_redirect_uri, $demo_scope defined in this file
// make inc/vars.inc not browsable on the server
$path .= "/includes/vars.inc"; 
include_once($path);

//so session vars can be used
session_start(); 

//Oauth 2.0: exchange token for session token so multiple calls can be made to api
if(isset($_REQUEST['code'])){
	$_SESSION['accessToken'] = get_oauth2_token($_REQUEST['code']);
}

//returns session token for calls to API using oauth 2.0
function get_oauth2_token($code) {
	global $client_id;
	global $client_secret;
	global $demo_redirect_uri;
	
	$oauth2token_url = "https://accounts.google.com/o/oauth2/token";
	$clienttoken_post = array(
	"code" => $code,
	"client_id" => $client_id,
	"client_secret" => $client_secret,
	"redirect_uri" => $demo_redirect_uri,
	"grant_type" => "authorization_code"
	);
	
	$curl = curl_init($oauth2token_url);

	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $clienttoken_post);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$json_response = curl_exec($curl);
	curl_close($curl);

	$authObj = json_decode($json_response);
	
	if (isset($authObj->refresh_token)){
		global $refreshToken;
		$refreshToken = $authObj->refresh_token;
	}

	$accessToken = $authObj->access_token;
	return $accessToken;
}
//calls api and gets the data
function call_api($accessToken,$url){
	$curl = curl_init($url);
 
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);	
	$curlheader[0] = "Authorization: Bearer " . $accessToken;
	curl_setopt($curl, CURLOPT_HTTPHEADER, $curlheader);

	$json_response = curl_exec($curl);
	curl_close($curl);
		
	$responseObj = json_decode($json_response);
	return $responseObj;	    
}

$loginUrl = sprintf("https://accounts.google.com/o/oauth2/auth?scope=%s&state=%s&redirect_uri=%s&response_type=code&client_id=%s",$demo_scope,$state,$demo_redirect_uri,$client_id);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>OAuth 2.0 Demo Page</title>
<link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>

<body>
<div id="wrapper">
	
	<div id="header" class="container_16">
		<h1><span>Google API</span> with OAuth 2 Demo <span>PHP</span></h1>
	</div>
    
<div id="content-wrap" class="container_16">   
<div class="grid_8 prefix_4 suffix_4"> 
	<h2>Authorize</h2>
	<p><a class="button" href="<?php echo $loginUrl ?>">Grant access with Google account for basic user info</a></p>
    <p>Demo will return the name on your Google account. It does not ask for offline access.</p>
    <p>You can revoke access by:</p> 
    <ol>
    <li>going to your Google Account Settings</li>
    <li>click "Edit" next to Authorizing applications &amp; sites</li>
    <li>click "Revoke Access" next to the app</li>
    </ol>
    </p>
 <?php
	if (isset($_SESSION['accessToken'])){
		$accountObj = call_api($_SESSION['accessToken'],"https://www.googleapis.com/oauth2/v1/userinfo");
		$your_name =  $accountObj->name;
		echo "<p class='successMessage'>The name on your Google account is: " . $your_name . "</p>";
		session_unset();
	}
	if(isset($_REQUEST['error'])){
		echo "<p class='errorMessage'>Error: " . $_REQUEST['error'] . "</p>";
	}
?> 
</div>   
</div>
</div>
</body>
</html>