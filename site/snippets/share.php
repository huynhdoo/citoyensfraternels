<?php
function getFacebookDetails($url){
  $rest_url = "http://api.facebook.com/restserver.php?format=json&method=links.getStats&urls=".urlencode($url);
  $json = json_decode(file_get_contents($rest_url),true);
return $json;
}
$fb = getFacebookDetails($page->url());
$fb_shares = $fb[0]['share_count'];
$fb_comments = $fb[0]['comment_count'];
$fb_likes  = $fb[0]['like_count'];
//var_dump ($fb);
//echo "Total Shares: ".$shares;
//echo "Total Likes: ".$likes;
//echo "Total Comments: ".$comments;

function getTwitterDetails($url){
  $rest_url = "https://cdn.api.twitter.com/1/urls/count.json?url=".urlencode($url);
  $json = json_decode(file_get_contents($rest_url),true);
return $json;
}
$tw = getTwitterDetails($page->url());
//var_dump($tw);
$tw_shares = $tw['count'];
?>

<div class="articleshare">
  Partager<br>
  <a class="shareicon facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode($page->url()) ?>" target="_blank">
    <i class="fa fa-facebook"></i>
  </a>
  <div class="sharenumber"><?php echo $fb_shares ?></div>
  <a class="shareicon twitter"href="http://twitter.com/share?url=<?php echo urlencode($page->url()) ?>&text=<?php echo $page->title() ?> @<?php echo $site->twitter()?> #<?php echo $site->hastag()?>" target="_blank">
    <i class="fa fa-twitter"></i>
  </a>
  <div class="sharenumber"><?php echo $tw_shares ?></div>
</div>

<div class="articleshare-bottom">
  <a class="shareicon facebook" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode($page->url()) ?>" target="_blank">
    <i class="fa fa-facebook"></i>
  </a>
  <a class="shareicon twitter"href="http://twitter.com/share?url=<?php echo urlencode($page->url()) ?>&text=<?php echo $page->title() ?> @<?php echo $site->twitter()?> #<?php echo $site->hastag()?>" target="_blank">
    <i class="fa fa-twitter"></i>
  </a>
</div>