<h4 class="has-text-centered">Twitter</h4>
    <?php
      // Require J7mbo's TwitterAPIExchange library (used to retrive the tweets)
      // You can get this library from here: https://github.com/J7mbo/twitter-api-php
    require_once(get_template_directory() . '/dist/php/TwitterAPIExchange.php');

      // Set here your twitter application tokens
    $settings = array(
      'consumer_key' => 'iiNdVmXjyPP3DG43wsEbb7vrn',
      'consumer_secret' => '7HrI1m2jfpF4b1mZQ20JqK7KEL1WJUJqrD09Wl36bBpyTvnhqW',
        
        // These two can be left empty since we'll only read from the Twitter's 
        // timeline
      'oauth_access_token' => '',
      'oauth_access_token_secret' => '',
    );

      // Set here the Twitter account from where getting latest tweets
    $screen_name = 'popin';

      // Get timeline using TwitterAPIExchange
    $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    $count = '&count=' . $countTwitter;
    $getfield = "?screen_name={$screen_name}{$count}";
    $requestMethod = 'GET';

    $twitter = new TwitterAPIExchange($settings);
    $user_timeline = $twitter
      ->setGetfield($getfield)
      ->buildOauth($url, $requestMethod)
      ->performRequest();

        // foreach($user_timeline as $tweet)  :
        //   $tweet_link = $tweet->id_str;
        // endforeach;
    $user_timeline = json_decode($user_timeline);

      // Require our TwitterTextFormatter library
      // You can get this class from here: https://goo.gl/bTfdWS
    require_once(get_template_directory() . '/dist/php/TwitterTextFormatter.php');

      // Use the class TwitterTextFormatter
    use Netgloo\TwitterTextFormatter;

    $iconTweet = popin_images_dir() . '/global-footer/iconmonstr-twitter-thin-outline.svg';
      // Print each tweet using TwitterTextFormatter to get the HTML text
    foreach ($user_timeline as $user_tweet) :
      if (isset($user_tweet->id_str)) {
      $tweet_id = $user_tweet->id_str;
      $tweet_url = "https://twitter.com/i/web/status/{$tweet_id}";
    }

    ?>
      <article data-animate="fadeInUp" class="level animated is-clickable" onclick="window.open('<?php echo $tweet_url ?>')">
        <figure class="image is-32x32 is-marginless-bottom has-bg-image is-bg-contain"
                style="background-image:url(<?php echo $iconTweet ?>);">
        </figure>
        <div class="column level-item">
          <p><?php echo TwitterTextFormatter::format_text($user_tweet); ?> </p> 
        </div>
      </article>
    <?php
    endforeach;
    ?>