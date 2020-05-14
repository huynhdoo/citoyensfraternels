<?php 
  if ($content) : $page = page($content); endif 
?>
<div id="homewelcome" class="clearfix">
    <div class="left">
        <?php echo $site->description()->kirbytext() ?>
    </div>
    <div class="right">
        <a href="<?php echo $page->url() ?>">En savoir plus »</a>
    </div>
</div>