<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('/script/fb/facebook.php');

$config = array(
    'appId' => '413005548778403',
    'secret' => '8c6d6dca17efdf37635a17e9157bac4c',
    'cookie' => true,
);

$facebook = new Facebook($config);
$user_id = $facebook->getUser();
$access_token = $facebook->getAccessToken();
echo $user_id;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My CSS Test</title>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu|Rosario' rel='stylesheet' type='text/css'>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

    </head>

    <body>


        <div id="fb-root">
            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                        appId: '413005548778403',
                        channelUrl : 'http://proposal-pennapps.rhcloud.com/test/channel.html', // Channel File
                        status: true, // check login status
                        cookie: true, // enable cookies to allow the server to access the session
                        xfbml: true  // parse XFBML
                    });
                
                FB.login(function(response) {
  if (response.session) {
    if (response.perms) {
      // user is logged in and granted some permissions.
      // perms is a comma separated list of granted permissions
    } else {
      // user is logged in, but did not grant any permissions
    }
  } else {
    // user is not logged in
  }
}, {perms:'read_stream,publish_stream,offline_access'});
    FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // connected
  } else if (response.status === 'not_authorized') {
    // not_authorized
  } else {
    // not_logged_in
  }
 });            
    
    };
                (function(d) {
                    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement('script');
                    js.id = id;
                    js.async = true;
                    js.src = "//connect.facebook.net/en_US/all.js";
                    ref.parentNode.insertBefore(js, ref);
                }(document));
            </script>
        </div>
        <div class="fb-login-button" onlogin="fblogin();" perms="email,read_stream,publish_stream,offline_access,create_event,friends_about_me,user_photos,friends_photos">Login with Facebook</div>


        <a href="#" onclick="FB.logout();">Logout of Facebook</a>
        <br></br>
        <script type="text/javascript">
        function runHack(){
            $('#retstuff').load('index.php');
        }
        </script>
        <input type="button" onclick="runHack()" name="btn_runHack" value="Run Hack!"/>
        <div id="retstuff"></div>





    </body>
</html>

