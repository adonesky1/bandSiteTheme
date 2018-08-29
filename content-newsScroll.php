<?php 

$number_of_tweets = 5;
$twitter_screenname_to_load = get_field('twitter_handle');
$tweets = getTweets($number_of_tweets, $twitter_screenname_to_load);

?>
 <section id="twitter-feed">
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