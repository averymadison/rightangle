<?php snippet('nav') ?>

<div class="page-title">
  <h1>Right Angle Woodworks</h1>
  <div class="filter-bar filter-button-group">
    <button data-filter="*" class="is-checked">Show All</button><button data-filter=".furniture">Custom Furniture</button><button data-filter=".remodel">Remodeling</button>
  </div>
</div>

<div class="photoswipe gallery" itemscope itemtype="http://schema.org/ImageGallery">
  <div class="gallery-sizer"></div>
  <div class="gallery-gutter"></div>
  <div class="gallery-item gallery-item-wide gallery-item-text">
    <?php echo $page->intro()->html() ?>
  </div>
  <?php
    $pages = page('projects')->children()->flip();
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
  <?php
    foreach (page('testimonials')->testimonials()->toStructure() as $testimonial): ?>
    <div class="gallery-item gallery-item-text testimonial" itemscope itemtype="http://schema.org/Review">
      <blockquote>
        <div class="quote" itemprop="name">
          <?= $testimonial->quote()->kirbytext() ?>
        </div>
        <cite itemscope itemtype="http://schema.org/Person">
          <div class="quote-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
            <?= $testimonial->customer() ?>
          </div>
          <div class="quote-location" itemprop="location" itemscope itemtype="http://schema.org/Place">
            <?= $testimonial->location() ?>
          </div>
        </cite>
      </blockquote>
    </div>
  <?php endforeach; ?>
</div>

<!-- Load Isotope and Photoswipe -->
<link rel="stylesheet" href="node_modules/photoswipe/dist/photoswipe.css">
<link rel="stylesheet" href="node_modules/photoswipe/dist/default-skin/default-skin.css">
<script src="node_modules/photoswipe/dist/photoswipe.min.js"></script>
<script src="node_modules/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<?php snippet('photoswipe') ?>

<?php snippet('footer') ?>
