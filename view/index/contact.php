<div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<div id="banner-area">
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Contact Us</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="<?php echo $this->getUrl()->getUrl('index','index') ?>">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Contact Us</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container" style="padding-bottom: 20px;">
	<div class="container">
		<!--/ Map end here -->

		<div class="gap-30"></div>

		<div class="row">
			<div class="col-md-7">
				<form id="contact-form" action="<?php echo $this->getSaveUrl() ?>" method="post" role="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="email[name]" id="name" placeholder="" type="text" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email[email]" id="email" placeholder="" type="email" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Subject</label>
								<input class="form-control" name="email[subject]" id="subject" placeholder="" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="email[message]" id="message" placeholder="" rows="10" required></textarea>
					</div>
					<div class="text-center"><br>
						<button class="btn btn-primary solid blank" type="submit">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget erat magna. Pellentesque justo
						ante</p>
					<br>
					<p><i class="fa fa-home info"></i> 1004 Surat Dell, Function City, GJ </p>
					<p><i class="fa fa-phone info"></i> +(00) 00000 00000 </p>
					<p><i class="fa fa-envelope-o info"></i> in@bigcraft.com</p>
					<p><i class="fa fa-globe info"></i> www.heymartina.com</p>
				</div>
			</div>
		</div>
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->