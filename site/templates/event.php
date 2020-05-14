<?php snippet('header') ?>
<?php snippet('navigation') ?>
<?php snippet('share') ?>
<!-- begin event -->
<div id="articleint">
  <div class="title"><h3><a href="<?php echo $page->parent()->url() ?>"><?php echo $page->parent()->title() ?></a></h3></div>
  <div class="articlecontent">
    <h1><?php echo $page->title() ?></h1>
    <?php if($page->place()!=''): ?>
    <div class="location">
      <i class="fa fa-map"></i><a href="<?php echo 'https://maps.google.com/maps?q='.$page->place() ?>" target="_blank"><?php echo $page->place() ?></a>
    </div>
    <?php endif ?>
    <div class="filedunder">
      <i class="fa fa-calendar"></i><?php echo $page->date('d/m/Y','time') ?>
    </div>
    <div class="articletext">
      <p><?php echo $page->text()->kirbytext() ?></p>
    </div>
  </div>
</div>
<!-- end event -->
<?php snippet('footer') ?>