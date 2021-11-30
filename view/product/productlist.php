	<?php $productCollection = $this->getProductCollection() ?>
	<?php $categories = $this->getCategories() ?>
	<?php ?>
	<div id="wpf-loader-two">
		<div class="wpf-loader-two-inner">
			<span>Loading</span>
		</div>
	</div>
	<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
	<div id="banner-area">
		<img src="images/banner/banner1.jpg" alt="" />
		<div class="parallax-overlay"></div>
		<!-- Subpage title start -->
		<div class="banner-title-content">
			<div class="text-center">
				<h2>Hey Martina</h2>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="<?php echo $this->getUrl()->getUrl('index', 'index') ?>">Home</a></li>
						<li class="breadcrumb-item text-white" aria-current="page">Products</li>
					</ol>
				</nav>
			</div>
		</div><!-- Subpage title end -->
	</div><!-- Banner area end -->
	<!-- / wpf loader Two -->
	<!-- SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
	<div class="body-inner">
		
		<?php if ($productCollection) : ?>
		<!--/ Header end -->
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="title2">Our Products
					<span class="title-desc">Choose best for you...</span>
				</h2>
			</div>
		</div>
		<section id="portfolio-item">
			<section id="filter-sidebar">
				<div class=" ml-3">
					<h6 class="font-weight-bold">Categories</h6>
					<div id="filter-orange"><span class="fa fa-minus"></span></div>
					<form class="form-dektop" method="POST" action="<?php echo $this->getFormUrl() ?>">
						<?php foreach($categories as $category) :?>
						<input type="radio" id="category" name="category" value="<?php echo $category ?>" <?php if($this->getCategory() == $category): ?>checked <?php endif; ?> onclick="javascript: submit()">
						<label for="<?php echo $category ?>"><?php echo $category ?></label><br>
						<?php endforeach; ?>
					</form>
				</div>
			</section>
			<div id="mobile-filter">
				<div class="mobile-dropdown">
				<form class="form-filter" method="POST" action="<?php echo $this->getFormUrl() ?>">
					<select name="category" class="form-control" onchange="this.form.submit()">
						<?php foreach($categories as $category) :?>
							<option value="<?php echo $category ?>" <?php if($this->getCategory() == $category): ?>selected <?php endif; ?>><?php echo $category ?></option>
						<?php endforeach; ?>
					</select>
				</form>
				</div>
			</div>
			<div class="container product-list text-center">
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
											<?php else : ?>
												<li><a href="<?php echo $this->getProductUrl($product->id) ?>"><img src="" alt="image" style="height: 300px; width:295px;"></a></li>
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
										<a href="<?php echo $this->getBaseUrl() ?>" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to
											Home</a>
									</div>
								</div>
							</div>
						</section>
					<?php endif; ?>
				</div><!-- Portfolio item row end -->
			</div><!-- Container end -->
		</section>


	</div><!-- Body inner end -->