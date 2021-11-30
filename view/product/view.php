<?php $product = $this->getProduct() ?>
<div id="wpf-loader-two">
  <div class="wpf-loader-two-inner">
    <span>Loading</span>
  </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area">
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-collapse collapse">
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>
  </div>
</section>
<!-- / menu -->


<!-- / catg header banner section -->
<!-- product category -->
<section id="aa-product-details" >
  <div class="container">
    <div class="row">
      <?php if ($product) : ?>
        <?php $images = $this->getProductImages() ?>
        <?php $base = $this->getBaseImage() ?>
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="product-page">
                <!-- Modal view slider -->
                <div class="col-md-9 col-sm-10 col-xs-12">
                  <div class="aa-product-view-slider">
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="bullbell/Images/Product/<?php echo $base->image ?>" class="simpleLens-lens-image"><img src="bullbell/Images/Product/<?php echo $base->image ?>" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                        <?php foreach ($images as $image) : ?>
                          <a data-big-image="bullbell/Images/Product/<?php echo $image->image ?>" data-lens-image="bullbell/Images/Product/<?php echo $image->image ?>" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="bullbell/Images/Product/<?php echo $image->image ?>" style="height: 60px;width:60px; padding:2px">
                          </a>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?php echo $product->name ?></h3>
                    <div class="aa-price-block">
                      <p class="aa-product-avilability">Price: <span></span></p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                    <div class="aa-prod-quantity">
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Owner Contact</a>
                      <a class="aa-add-to-cart-btn" href="#">Inquiry</a>
                      <a class="aa-add-to-cart-btn" href="#">somethin else</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <input type="hidden">
        </div>
        <hr>
      <?php else : ?>
        <section id="main-container">
          <div class="container desktop-404">
            <div class="error-page text-center">
              <div class="error-code">
                <strong>404</strong>
              </div>
              <div class="error-message">
                <h3>Oops... Page Not Found!</h3>
              </div>
              <div class="error-body">
                Try using the button below to go to main page of the site <br />
                <a href="<?php echo $this->getUrl()->getUrl('index', 'index', null, true) ?>" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to
                  Home</a>
              </div>
            </div>
          </div>
        </section>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- / product category -->