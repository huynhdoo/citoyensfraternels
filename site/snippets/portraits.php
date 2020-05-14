<!-- snipet portraits -->
<div id="homespace" class="clearfix">
  <div class="title"><a href="<?php echo page('portraits')->url() ?>"><h3><?php echo page('portraits')->title() ?></h3></a></div>
  <div class="space_firstblock clearfix">
    <!-- portraits -->
    <?php foreach(page('portraits')->children()->visible()->shuffle()->limit($limit) as $portrait): ?>
    <div class="wsitem">
      <div class="wsimg">
        <?php if($image = $portrait->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $portrait->url() ?>">
          <img src="<?php echo thumb($image, array('width' => 500, 'height' => 350, 'crop' => true))->url() ?>" alt="<?php echo $portrait->title()->html() ?>">
        </a>
        <?php endif ?>
        <div class="tl"></div>
        <div class="br"></div>
      </div>
      <div class="wsinfo">
        <div class="spacetitle"><a href="<?php echo $portrait->url() ?>"><?php echo $portrait->title()->html() ?></a></div>
        <div class="spacejob"><?php echo $portrait->teaser() ?></div>
      </div>
    </div>
    <?php endforeach ?>
    <!-- end portraits -->
  </div>
  <div class="new clearfix">
    <div class="left">// Des nouveaux portraits seront régulièrement diffusés.</div>
    <div class="right"><a href="<?php echo page('portraits')->url() ?>">Voir tous les portraits &rarr;</a></div>
  </div>
</div>
<!-- end snippet portraits -->
