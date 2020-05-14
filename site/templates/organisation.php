<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('share') ?>
<div id="articleint">
  <div class="title"><a href="<?php echo $page->parent()->url() ?>"><h3><?php echo $page->parent()->title() ?></h3></a></div>
  <div class="articlecontent">
    <h1><?php echo $page->title() ?></h1>
    <div class="location">
    </div>
    <div class="orglogo">
      <?php if($image = $page->image($page->logo())): ?>
        <img src="<?php echo thumb($image, array('width' => 150, 'height' => 150, 'crop' => false))->url() ?>" alt="<?php echo $page->title()->html() ?>">
      <?php endif ?>
    </div>
    <div class="articletext">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <div class="orginfos">
      <div class="infos"><a href="<?php echo 'https://maps.google.com/maps?q='.$page->location() ?>" target="_blank"><i class="fa fa-map-marker"></i>&nbsp;<?php echo $page->location() ?></a></div>
      <div class="infos"><i class="fa fa-phone"></i>&nbsp;<?php echo $page->tel() ?></div>
      <div class="infos"><a href="<?php echo $page->web() ?>" target="_blank"><i class="fa fa-link"></i>&nbsp;<?php echo $page->web() ?></a></div>
      <div class="infos"><a href="<?php echo 'mailto:'.$page->email() ?>" target="_blank"><i class="fa fa-envelope"></i>&nbsp;<?php echo $page->email() ?></a></div>
      <div class="infos"><a href="<?php echo $page->fb() ?>" target="_blank"><i class="fa fa-facebook"></i>&nbsp;<?php echo $page->fb() ?></a></div>
      <div class="infos"><a href="<?php echo $page->tw() ?>" target="_blank"><i class="fa fa-twitter"></i>&nbsp;<?php echo $page->tw() ?></a></div>
    </div>
  </div>
</div>
<!-- end article -->
<?php snippet('footer') ?>