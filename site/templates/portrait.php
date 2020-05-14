<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('share') ?>
<!-- begin article -->
<div id="articleint">
  <div class="title"><a href="<?php echo $page->parent()->url() ?>"><h3><?php echo $page->parent()->title() ?></h3></a></div>
  <div class="articlecontent">
    <h1><?php echo $page->title() ?></h1>
    <div class="byline-top">
      <?php echo $page->teaser() ?>
    </div>
    <div class="location">
      <i class="fa fa-rocket"></i>
      <?php foreach($page->involve()->split() as $org): ?>
          <?php $obj = page('organisations')->children()->find($org) ?>
          <a href="<?php echo $obj->url() ?>"><?php echo $obj->title() ?></a>
      <?php endforeach ?>
    </div>
    <div class="filedunder">
      <i class="fa fa-heart"></i>
      <?php foreach($page->follow()->split() as $follow): ?>
      <?php $obj = page('initiatives')->children()->find($follow) ?>
          <a href="<?php echo $obj->url() ?>"><div class="c1"></div><div class="c2"></div>&#35;<?php echo $obj->title()?></a>
      <?php endforeach ?>
    </div>
    <div class="articletext">
      <p><?php echo $page->text()->kirbytext() ?></p>
    </div>
  </div>
</div>
<!-- end article -->
<?php snippet('footer') ?>