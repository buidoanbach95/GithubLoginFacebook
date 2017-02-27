<?php
	/*require_once 'vendoe/spl_autoload.php';
	//Lấy thông tin từ googlesite.
		// "$client_id và $client_secret" Lấy từ "https://console.developers.google.com/apis/credentials?project=temporal-window-116303"
 	$client_id = '531942979192-pab6r0l3jl112rjgtkdms0tfas0qlknf.apps.googleusercontent.com';
	$client_secret = 'lr4jVCHm38MHaVN24nlxcU8X';
	// $redirect_uri đường dẫn đến file login trong project
	$redirect_uri = 'http://localhost/blooggg/login/login.php';

	// kết nối db.
	$db_username = "root"; 
	$db_password = "";
	$host_name = "localhost";
	$db_name = "dblogin";


	/*$client = new Google_Client();
	$client ->setClientId($client_id);
	$client ->setRe */
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Login With Facebook</title>
</head>
<body>
<div id="fb-root"></div>
	    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '147639772420970',
                xfbml      : true,
                version    : 'v2.8' // or earlier version
            });
            FB.AppEvents.logPageView();
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=147639772420970";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="true" data-auto-logout-link="true"></div>
</body>
</html>