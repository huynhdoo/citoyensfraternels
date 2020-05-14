<!-- snippet innovations -->
<?php 
  if ($content) : $page = page($content); endif 
?>
<div id="homeint">
  <div class="title">
    <a href="<?php echo $page->url() ?>">
      <h3>
      <?php echo $page->title() ?>
      </h3>
    </a>
    <?php
      $tag  = htmlspecialchars(urldecode(param('tag')));
      $place  = htmlspecialchars(urldecode(param('place')));
      $actions = $page->children()->visible()->limit($limit);
      if($tag) {
        echo r($tag !== '', '<h2> / ' . $tag . '</h2>', '');
        $actions = $actions->filterBy('tags', $tag, ',');
      }
      if($place) {
        echo r($place !== '', '<h2> / ' . $place . '</h2>', '');
        $actions = $actions->filterBy('place', $place, ',');
    }
    ?>
  </div>
  <div class="int_firstblock clearfix">
    <!-- innovations -->
    <?php foreach($actions as $action): ?>
    <div class="int">
      <div class="tl"></div>
      <div class="image">
        <?php if($image = $action->image($action->cover())): ?>
        <a href="<?php echo $action->url() ?>">
          <img src="<?php echo thumb($image, array('width' => 500, 'height' => 350, 'crop' => true))->url() ?>" alt="<?php echo $action->title()->html() ?>">
        </a>
        <?php endif ?>
      </div>
      <div class="info clearfix">
        <h4><a href="<?php echo $action->url() ?>"><?php echo $action->title()->html() ?></a></h4>
        <div class="tags">
          <?php foreach($action->tags()->split() as $tag): ?>
          <a href="<?php echo page('innovations')->url() . '/tag:' . $tag ?>">
            <div class="c1"></div><div class="c2"></div><?php echo html($tag) ?>
          </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    <!-- end innovations -->
  </div>
  <div class="new clearfix">
    <div class="left">// Parlez-nous de vos innovations : <a href='mailto:<?php echo $site->email() ?>'><?php echo $site->email() ?></a>.</div>
    <div class="right"><a href="<?php echo $page->url() ?>">Voir toutes les innovations &rarr;</a></div>
  </div>
</div>
<!-- end snippet innovations -->
