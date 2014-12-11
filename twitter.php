<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Twitter - API PHP</title>
</head>

<body>
    <h1>Twitter</h1>
    <div class="tweets">
        <?php require_once( 'TwitterAPIExchange.php'); $settings=array( 'oauth_access_token'=>"<Your API key", 'oauth_access_token_secret' => "Your API key", 'consumer_key' => "Your API key" ); $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json'; $getfield = '?screen_name= //YOUR_TWITTER_USERNAME// &count=200&exclude_replies=true'; $requestMethod = 'GET'; $twitter = new TwitterAPIExchange($settings); $response = $twitter->setGetfield($getfield) ->buildOauth($url, $requestMethod) ->performRequest(); $a = json_decode( $response); $i = 0; foreach($a as $status) { if($i
        < 10) { echo '<p>'. $status->text .'</p>
    </div>'; } $i++; } ?>
    </div>
</body>

</html>