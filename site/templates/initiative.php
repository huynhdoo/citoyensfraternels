<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('share') ?>
<!-- begin article -->
<div id="articleint">
  <div class="title"><h3><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></h3></div>
  <div class="articlecontent">
    <h1><?php echo $page->title() ?></h1>
    <div class="location">
      <i class="fa fa-map-marker"></i>
      <?php foreach($page->place()->split() as $place): ?>
          <a href="<?php echo $page->parent()->url() . '/place:' . $place ?>"><?php echo $place ?></a>
      <?php endforeach ?>
    </div>
    <div class="filedunder">
      <i class="fa fa-tags"></i>
      <?php foreach($page->tags()->split() as $tag): ?>
          <a href="<?php echo $page->parent()->url() . '/tag:' . $tag ?>"><div class="c1"></div><div class="c2"></div><?php echo $tag ?></a>
      <?php endforeach ?>
    </div>
    <div class="articletext">
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </div>
</div>
<!-- end article -->
<?php snippet('footer') ?>