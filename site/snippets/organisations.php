<!-- snippet organisations -->
<?php 
  if ($content) : $page = page($content); endif 
?>
<div id="igfeed" class="clearfix">
  <div class="title"><a href="<?php echo $page->url() ?>"><h3><?php echo $page->title() ?></h3></a></div>
  <div class="int_firstblock clearfix">
    <?php foreach($page->children()->visible()->shuffle()->limit($limit) as $org): ?>
    <div class="instagram-photo">
      <div class="igphoto">
        <?php if($image = $org->image($org->logo())): ?>
        <a href="<?php echo $org->url() ?>">
          <img src="<?php echo thumb($image, array('width' => 150, 'height' => 150, 'crop' => false))->url() ?>" alt="<?php echo $org->title()->html() ?>">
        </a>
        <?php endif ?>
      </div>
      <!--
      <div class="iglikes">
        <i class="fa fa-heart-o"></i> &nbsp;9
      </div>
      -->
      </div>
    <?php endforeach ?>
  </div>
</div>
<!-- end snippet organisations -->