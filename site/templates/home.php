<?php snippet('nav') ?>

<div class="page-title wrapper">
  <h1>Right Angle Woodworks</h1>
</div>

<script src="node_modules/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="node_modules/isotope-layout/dist/isotope.pkgd.min.js"></script>

<div class="gallery-container" data-sticky-container>

  <div class="gallery-controls wrapper">
    <div class="filter-bar filter-button-group">
      <button data-filter="*" class="is-checked">Show All</button><button data-filter=".furniture">Furniture</button><button data-filter=".remodel">Remodeling</button><button data-filter=".testimonial">Testimonials</button>
    </div>
  </div>

  <div class="photoswipe gallery" itemscope itemtype="http://schema.org/ImageGallery">
    <div class="gallery-sizer"></div>
    <div class="gallery-gutter"></div>
    <div class="gallery-item gallery-item-wide gallery-item-text">
      <?php echo $page->intro()->html() ?>
    </div>

    <?php
      $i = 0;
      $testimonials = page('testimonials')->testimonials();
      $numTestimonials = $testimonials->toStructure()->count();

      $pages = page('projects')->children()->visible()->flip();
    ?>

    <?php foreach ($pages as $page): ?>

      <?php foreach ($page->images() as $image): ?>

        <figure class="gallery-item <?= $page->category()->value() ?>" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
          <a href="<?= $image->thumb('lightbox')->url() ?>" itemprop="contentUrl" data-size="<?= $image->thumb('lightbox')->width() ?>x<?= $image->thumb('lightbox')->height() ?>" title="<?= $page->text()->value(); ?>">
            <img src="<?= $image->thumb('masonry')->url() ?>" itemprop="thumbnail" alt="<?= $page->title()->value(); ?> <?= $page->text()->value(); ?>" class="img-responsive"/>
          </a>
        </figure>
      <?php endforeach; ?>

      <!-- After one project page, check for a testimonial. If one exists, insert it. -->
      <?php
        if($i < $numTestimonials):
          $testimonial = $testimonials->toStructure()->nth($i);
        ?>
        <div class="gallery-item gallery-item-text testimonial" itemscope itemtype="http://schema.org/Review">
          <blockquote>
            <div class="quote" itemprop="name">
              <?= $testimonial->quote()->kirbytext() ?>
            </div>
            <cite itemscope itemtype="http://schema.org/Person">
              <span class="quote-author" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                <?= $testimonial->customer() ?>
              </span>
              <span class="quote-location" itemprop="location" itemscope itemtype="http://schema.org/Place">
                <?= $testimonial->location() ?>
              </span>
            </cite>
          </blockquote>
        </div>
      <?php
        $i++;
        endif;
      ?>

    <?php endforeach; ?>
  </div>

  <div class="call-to-action wrapper">
    <a href="<?= page('contact')->url() ?>" class="button">Get in touch</a>
      <span class="or">or</span>
    <a href="<?= page('about')->url() ?>" class="button">Learn more about me</a>
  </div>

</div>

<link rel="stylesheet" href="node_modules/photoswipe/dist/photoswipe.min.css">
<link rel="stylesheet" href="node_modules/photoswipe/dist/default-skin/default-skin.min.css">
<script src="node_modules/photoswipe/dist/photoswipe.min.js"></script>
<script src="node_modules/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<?php snippet('photoswipe') ?>

<script src="node_modules/stickybits/dist/stickybits.min.js"></script>
<script src="assets/js/scripts.min.js"></script>

<?php snippet('footer') ?>
