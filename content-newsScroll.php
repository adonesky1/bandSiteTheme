<?php 

$my_news = "hellllllllooooooo";
$number_of_tweets = 5;
$twitter_screenname_to_load ='@mastodonmusic';

$tweets = getTweets($number_of_tweets, $twitter_screenname_to_load);

?>
 <section id="optin">
		<!-- <div class="container"> -->
			<div class="row">
                   
<marquee behavior="scroll" direction="right" scrollamount="10">
        <?php
        foreach ($tweets as $tweet) {
            echo $tweet['text'];
        }
        ?>   
    </marquee>

            </div>
        </div>  
</section>