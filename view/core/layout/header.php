<header id="header" class="fixed-top header2" role="banner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="index.html"><img class="img-fluid float-right logo img-thumbnail" src="images/translogo.png" alt="logo"></a>
			<p style="font-size: 25px; color: white;">HeyMartina</p>
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $this->getBaseUrl() ?>">Home</a></a>
					</li><li class="nav-item">
						<a class="nav-link" href="<?php echo $this->getProductListUrl() ?>">Products</a></a>
					</li><li class="nav-item">
						<a class="nav-link" href="<?php echo $this->getAboutUrl() ?>">About Us</a></a>
					<!-- </li><li class="nav-item">
						<a class="nav-link" href="contact.html">Gallery</a></a>
					</li> -->
					
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $this->getContactUrl() ?>">Contact Us</a></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>