<nav>
  <?php
    $items = $pages->visible();
    foreach($items  as $item): ?>
  <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
  <?php endforeach ?>
</nav>
