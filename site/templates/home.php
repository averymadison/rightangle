<?php snippet('nav') ?>

<div class="button-group filter-button-group">
  <button data-filter="*" class="is-checked">show all</button>
  <button data-filter=".furniture">furniture</button>
  <button data-filter=".remodel">remodel</button>
</div>

  <div class="gallery-item intro gallery-item-wide">
    <?php echo $page->intro()->html() ?>
  </div>
<div class="photoswipe gallery" itemscope itemtype="http://schema.org/ImageGallery">
  <?php
    $pages = page('projects')->children();
    foreach ($pages as $page): ?>

    <?php
      $images = $page->files()->filterBy('type', 'image');
      foreach ($images as $image): ?>

      <?php
        $imageMax = $image->resize(1600, null);
        $imageThumb = $image->resize(600);
        ?>
      <figure class="gallery-item <?= $page->category()->value() ?>" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="<?= $imageMax->url(); ?>" itemprop="contentUrl" data-size="<?= $imageMax->width(); ?>x<?= $imageMax->height(); ?>" title="<?= $page->text()->value(); ?>">
          <img src="<?= $imageThumb->url(); ?>" itemprop="thumbnail" alt="<?= $page->title()->value(); ?> <?= $page->text()->value(); ?>" class="img-responsive"/>
        </a>
      </figure>
    <?php endforeach; ?>
  <?php endforeach; ?>
</div>

<!-- Load Isotope and Photoswipe -->
<link rel="stylesheet" href="node_modules/photoswipe/dist/photoswipe.css">
<link rel="stylesheet" href="node_modules/photoswipe/dist/default-skin/default-skin.css">
<script src="node_modules/photoswipe/dist/photoswipe.min.js"></script>
<script src="node_modules/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<?= \ka\kirby\PhotoSwipe::init(); ?>

<?php snippet('footer') ?>
