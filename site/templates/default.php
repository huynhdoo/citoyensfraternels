<?php snippet('header') ?>
<?php snippet('navigation') ?>
<!-- begin default -->
<div id="articleint">
  <div class="title"><a href="<?php echo $page->parent()->url() ?>"><h3><?php echo $page->parent()->title() ?></h3></a></div>
  <div class="articlecontent">
    <div class="articletext">
      <p><?php echo $page->text()->kirbytext() ?></p>
    </div>
    <?php
      $pages = $page->children()->visible();
    ?>
    <?php foreach($pages as $p): ?>
    <div class="articlepages">
      <a href="<?php echo $p->url() ?>">
        <?php echo $p->title()->html() ?>
      </a>
    </div>
    <?php endforeach ?>
  </div>
</div>
<!-- end default -->
<?php snippet('footer') ?>