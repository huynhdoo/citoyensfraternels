<!-- navigation -->
<div id="navigation" class="clearfix">
  <div class="navbar">
    <ul>
      <?php foreach($pages->visible() as $p): ?>
      <li><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>
<!-- end navigation -->