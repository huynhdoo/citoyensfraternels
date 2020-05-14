<div class="navigate clearfix">
  <a id="menubutton"><i class="fa fa-bars"></i></a>
</div>
<div class="menu" style="display:none;">
  <ul>
    <?php foreach($pages->visible() as $p): ?>
    <li><a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
    <?php endforeach ?>
    <li><a href="http://facebook.com/citoyensfrat" target="_blank">Facebook</a></li>
    <li><a href="http://twitter.com/citoyensfrat" target="_blank">Twitter</a></li>
    <!--<li><a href="http://instagram.com/citoyensfrat" target="_blank">Instagram</a></li>-->
  </ul>
</div>
<?php /*
<nav role="navigation">
  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>
</nav>
*/?>
