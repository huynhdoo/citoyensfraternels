<?php 
  if ($content) : $page = page($content); endif 
?>
<div id="homeintro">
    <?php echo $site->description()->kirbytext() ?>
    <div class="new clearfix">
        <div class="right"><a href="<?php echo $page->url() ?>">En savoir plus &rarr;</a></div>
    </div>
</div>
