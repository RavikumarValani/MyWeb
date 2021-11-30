<?php $productCollection = $this->getProductCollection() ?>
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- Slider start -->
<section id="home" class="home-mobile-padding">
    <div id="main-slide" class="ts-flex-slider">
        <div class="flexSlideshow flexslider">
            <ul class="slides">
                <li>
                    <div class="">
                        <img src="Images/slider/bg1.png" alt="slider">
                    </div>
                    <div class="flex-caption slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated2">
                                Hey Martina
                            </h2>
                            <h3 class="animated3">

                            </h3>
                            <!-- <p class="animated4"><a href="#" class="slider btn btn-primary white">Check Now</a></p> -->
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay2-ch">
                        <img src="Images/slider/slider2.png" alt="slider">
                    </div>
                    <div class="flex-caption slider-content">
                        <div class="col-md-12 text-center">
                            <!-- <h2 class="animated4">
								How Big Can You Dream?
							</h2>
							<h3 class="animated5">
								We are here to make it happen
							</h3>
							<p class="animated6"><a href="#" class="slider btn btn-primary white">Buy Now</a></p> -->
                        </div>
                    </div>
                </li>
                <li>
                    <div class="overlay2-ch">
                        <img src="Images/slider/slider3.png" alt="slider">
                    </div>
                    <div class="flex-caption slider-content">
                        <div class="col-md-12 text-center">
                            <!-- <h2 class="animated7">
								Your Challenge is Our Progress
							</h2>
							<h3 class="animated8">
								So, You Don't Need to Go Anywhere Today
							</h3>
							<div class="">
								<a class="animated4 slider btn btn-primary btn-min-block white" href="#">Get Now</a><a
									class="animated4 slider btn btn-primary btn-min-block solid" href="#">Live Demo</a>
							</div> -->
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/ Main slider end -->
</section>
<!--/ Slider end -->

<div class="body-inner">
    <!--/ Header end -->
    <section id="portfolio-item" class="text-center">
        <div class="container">
            <?php if ($productCollection) : ?>
            <div class="row">
                <div class="col-md-12 heading text-center">
                    <h2 class="title2">Our Products
                        <span class="title-desc">Choose best for you</span>
                    </h2>
                </div>
            </div>
            <!-- Portfolio item row start -->
            <div class="row">
                    <?php foreach ($productCollection as $product) : ?>

                        <!-- Portfolio item slider start -->
                        <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                            <div class="portfolio-slider">
                                <div class="flexportfolio flexslider">
                                    <ul class="slides">
                                        <?php $images = $this->getSliderImages($product->id) ?>
                                        <?php if ($images) : ?>
                                            <?php foreach ($images as $image) : ?>
                                                    <li><a href="<?php echo $this->getProductUrl($image->productId) ?>"><img src="bullbell/Images/Product/<?php echo $image->image ?>" alt="image" style="height: 300px; width:295px;"></a></li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <div class="portfolio-slider">
                                        <div class="flexportfolio flexslider">
                                            <h3 class="widget-title"><?php echo $product->name ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sidebar end -->
                    <?php endforeach; ?>
                </div><!-- Portfolio item row end -->
                <div class="more-product">
                    <a class="more" href="<?php echo $this->getUrl()->getUrl('list','product') ?>">check more</a>
                </div>
                <?php endif; ?>
        </div><!-- Container end -->
    </section>


</div><!-- Body inner end -->

<section class="desktop-section">
    <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ts-padding" style="height: 500px;;background:url(Images/abut.png) 50% 50% / cover no-repeat;">
                </div>
                <div class="col-md-6 ts-padding img-block-right">
                    <div class="img-block-head text-center">
                        <h2>BRAND</h2>
                        <h3>PRESENCE</h3>

                        <p>
                        <ul>
                            <li>Headquartered in Rajkot , Gujarat , Hey Martina currently operates in three states Gujarat , Bihar , and Punjab.</li>
                            <br />
                            <li>The 2 of its stores are company - owned while the other 6 are franchised through the Franchise Partnership Plan.</li>
                            <br />
                            <!-- <li>We are soon opening our stores across more than 20 cities of Gujarat The brand is also planning to expand worldwide via franchising , setting up stores at different locations for a wider reach With elegant design aesthetics , high quality material</li> -->
                        </ul>

                        </p>
                    </div>

                    <div class="gap-30"></div>


                </div>
            </div>
        </div>
    </section>

    <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 ts-padding img-block-right">
                    <div class="img-block-head text-center">
                        <h2>BRAND</h2>
                        <h3>VISION & PHILOSOPHY</h3>

                        <p>
                        <ul>
                            <li>Hey Martina believes to design women apparel that goes in line with the latest global fashion trends.</li>
                            <br />
                            <li>Our dresses are very comfortable and practical to carry , which makes them an absolute favorite among the contemporary women.</li>
                            <br />
                            <!-- <li>We are soon opening our stores across more than 20 cities of Gujarat The brand is also planning to expand worldwide via franchising , setting up stores at different locations for a wider reach With elegant design aesthetics , high quality material</li> -->
                        </ul>

                        </p>
                    </div>

                    <div class="gap-30"></div>


                </div>

                <div class="col-md-6 ts-padding" style="height: 500px;;background:url(images/abut2.png) 50% 50% / cover no-repeat;">
                </div>

            </div>
        </div>
    </section>

    <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 ts-padding" style="height: 500px;;background:url(Images/abut3.png) 50% 50% / cover no-repeat;">
                </div>

                <div class="col-md-6 ts-padding img-block-right">
                    <div class="img-block-head text-center">
                        <!-- <h2>BRAND</h2> -->
                        <h3>INFRASTRUCTURE</h3>

                        <p>
                        <ul>
                            <li>Our Head Office is Located in Rajkot,in permises with the total surface more than 2000 sq. ft.</li>
                            <br />
                            <li>Our dresses are very comfortable and practical to carry , which makes them an absolute favorite among the contemporary women.</li>
                            <br />
                            <!-- <li>We are soon opening our stores across more than 20 cities of Gujarat The brand is also planning to expand worldwide via franchising , setting up stores at different locations for a wider reach With elegant design aesthetics , high quality material</li> -->
                        </ul>

                        </p>
                    </div>

                    <div class="gap-30"></div>


                </div>



            </div>
        </div>
    </section>
</section>

<section class="mobile-section">
    <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ts-padding" style="height: 500px;;background:url(Images/abut.png) 50% 50% / cover no-repeat;">
                </div>
                <div class="col-md-6 ts-padding img-block-right">
                    <div class=" text-center">
                        <h2>BRAND</h2>
                        <h3>PRESENCE</h3>

                        <p id="brand-desc">
                        <ul>
                            <li style="display: block; text-align:center; float:left;">Headquartered in Rajkot , Gujarat , Hey Martina currently operates in three states Gujarat , Bihar , and Punjab.</li>
                            <br />
                            <li style="display: block;">The 2 of its stores are company - owned while the other 6 are franchised through the Franchise Partnership Plan.</li>
                            <br />
                            <!-- <li>We are soon opening our stores across more than 20 cities of Gujarat The brand is also planning to expand worldwide via franchising , setting up stores at different locations for a wider reach With elegant design aesthetics , high quality material</li> -->
                        </ul>

                        </p>
                    </div>

                    <div class="gap-30"></div>


                </div>
            </div>
        </div>
    </section>

    <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ts-padding" style="height: 500px;;background:url(Images/abut2.png) 50% 50% / cover no-repeat;">
                </div>
                <div class="col-md-6 ts-padding img-block-right">
                    <div class="img-block-head text-center">
                        <h2>BRAND</h2>
                        <h3>VISION & PHILOSOPHY</h3>

                        <p>
                        <ul id="brand-desc">
                            <li>Hey Martina believes to design women apparel that goes in line with the latest global fashion trends.</li>
                            <br />
                            <li>Our dresses are very comfortable and practical to carry , which makes them an absolute favorite among the contemporary women.</li>
                            <br />
                            <!-- <li>We are soon opening our stores across more than 20 cities of Gujarat The brand is also planning to expand worldwide via franchising , setting up stores at different locations for a wider reach With elegant design aesthetics , high quality material</li> -->
                        </ul>

                        </p>
                    </div>

                    <div class="gap-30"></div>


                </div>
            </div>
        </div>
    </section>

    <section id="image-block" class="image-block p-0">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 ts-padding" style="height: 500px;;background:url(Images/abut3.png) 50% 50% / cover no-repeat;">
                </div>

                <div class="col-md-6 ts-padding img-block-right">
                    <div class="img-block-head text-center">
                        <!-- <h2>BRAND</h2> -->
                        <h3>INFRASTRUCTURE</h3>

                        <p>
                        <ul id="brand-desc">
                            <li>Our Head Office is Located in Rajkot,in permises with the total surface more than 2000 sq. ft.</li>
                            <br />
                            <li>Our dresses are very comfortable and practical to carry , which makes them an absolute favorite among the contemporary women.</li>
                            <br />
                            <!-- <li>We are soon opening our stores across more than 20 cities of Gujarat The brand is also planning to expand worldwide via franchising , setting up stores at different locations for a wider reach With elegant design aesthetics , high quality material</li> -->
                        </ul>

                        </p>
                    </div>

                    <div class="gap-30"></div>


                </div>



            </div>
        </div>
    </section>
</section>

<!-- Portfolio start -->
<section id="portfolio" class="portfolio portfolio-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading text-center">
                <span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
                <h2 class="title2">Media Coverage
                    <span class="title-desc">A Quality Experience Team with 6 years experience</span>
                </h2>
            </div>
        </div> <!-- Title row end -->

        <!--Isotope filter start -->
        <div class="row text-center">
            <div class="col-12">
                <div class="isotope-nav" data-isotope-nav="isotope">
                    <ul>
                        <li><a href="#" class="active" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".news-paper">News Paper</a></li>
                        <li><a href="#" data-filter=".billboard">Billboard</a></li>
                        <!-- <li><a href="#" data-filter=".joomla">Joomla</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li> -->
                    </ul>
                </div>
            </div>
        </div><!-- Isotope filter end -->

        <div id="isotope" class="row isotope">
            <div class="col-sm-3 news-paper isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="Images/portfolio/heycoverage1.PNG" alt="">
                        <figcaption>
                            <h3>Startup Business</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto" href="Images/portfolio/heycoverage1.PNG"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 news-paper isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="Images/portfolio/heycoverage2.PNG" alt="">
                        <figcaption>
                            <h3>Easy to Lanunch</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto" href="Images/portfolio/heycoverage2.PNG"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 news-paper isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="Images/portfolio/heycoverage3.PNG" alt="">
                        <figcaption>
                            <h3>Your Business</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto" href="Images/portfolio/heycoverage3.PNG"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 billboard isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="Images/portfolio/heycoverage4.PNG" alt="">
                        <figcaption>
                            <h3>Prego Match</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto" href="Images/portfolio/heycoverage4.PNG"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->

            <div class="col-sm-3 billboard isotope-item">
                <div class="grid">
                    <figure class="m-0 effect-oscar">
                        <img src="Images/portfolio/heycoverage5.PNG" alt="">
                        <figcaption>
                            <h3>Fashion Brand</h3>
                            <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a class="view icon-pentagon" data-rel="prettyPhoto" href="Images/portfolio/heycoverage5.PNG"><i class="fa fa-search"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div><!-- Isotope item end -->
            <!-- Isotope item end -->
        </div><!-- Isotope content end -->
    </div><!-- Container end -->
</section><!-- Portfolio end -->
<!-- Service box start -->
<section id="feature" class="feature">
    <div class="container">

        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
                <div class="feature-content">
                    <h3>Clean &amp; Modern Design</h3>
                    <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
                <div class="feature-content">
                    <h3>Affordable Price</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-film"></i></span>
                <div class="feature-content">
                    <h3>Light Wight</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End first featurebox -->
        </div><!-- Content row end -->

        <div class="gap-40"></div>

        <div class="row">
            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
                <div class="feature-content">
                    <h3>High-Quality Material</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
                <div class="feature-content">
                    <h3>Endless Possibilites</h3>
                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
            <!--/ End first featurebox -->

            <div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <span class="feature-icon float-left"><i class="fa fa-pagelines"></i></span>
                <div class="feature-content">
                    <h3>24/7 Live Support</h3>
                    <p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
                </div>
            </div>
            <!--/ End first featurebox -->

        </div><!-- Content row end -->
    </div>
</section>


<!-- Testimonial start-->
<section class="testimonial parallax parallax3">
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row">
            <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                <div class="item">
                    <div class="testimonial-thumb">
                        <img src="Images/team/heyprofile.jpg" alt="testimonial">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
                            in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                            purpose. Lorem Ipsum is that it as opposed to using.
                        </p>
                        <h3 class="name">Mr.Himanshu Yadav<span>Founder</span></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-thumb">
                        <img src="Images/team/testimonial2.jpg" alt="testimonial">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
                            in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                            purpose. Lorem Ipsum is that it as opposed to using.
                        </p>
                        <h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-thumb">
                        <img src="Images/team/testimonial3.jpg" alt="testimonial">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">
                            Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
                            in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                            purpose. Lorem Ipsum is that it as opposed to using.
                        </p>
                        <h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
                    </div>
                </div>
            </div>
            <!--/ Testimonial carousel end-->
        </div>
        <!--/ Row end-->
    </div>
    <!--/  Container end-->
</section>