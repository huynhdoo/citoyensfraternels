<!-- welcome -->
<div id="homewelcome" class="clearfix">
  <div class="left">
    <div id="logo">
      <?php if($image = $site->image($site->cover())): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $site->title()->html() ?>" />
      <?php endif ?>
    </div>
    <?php echo $site->description()->kirbytext() ?>
  </div>
  <div class="right">
    <a href="<?php echo $site->url() ?>/appel">Signez l'appel</a>
  </div>
</div>
<!-- end welcome -->