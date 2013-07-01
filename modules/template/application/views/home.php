<?php $this->load->view('components/page_head') ?>
<body>
    <div class="navbar navbar-fixed-top">
      	<div class="navbar-inner">
	        <div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		        <a class="brand" href="#"><?php echo $module_title ?></a>
		        <div class="nav-collapse collapse">
		            <ul class="nav">
		              	<li class="active"><a href="#">Home</a></li>
		              	<li><a href="#about">Link</a></li>
		              	<li><a href="#contact">Link</a></li>
				      	<li class="pull-right"><a href="<?php echo site_url('login/logout') ?>">Logout</a></li>
		            </ul>
		        </div> <!-- End nav-collapse -->
	        </div> <!-- End container -->
      	</div> <!-- End navbar-inner -->
    </div> <!-- End navbar -->

    <div class="container">

		<div class="span12">
			
			<div class="hero-unit">
				<h1><?php echo $module_title ?></h1>
				<p>This is a responsive template for learning modules at Vita Group.</p>
				<p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
			</div>

			<div class="row-fluid">

				<div class="span4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn" href="#">View details &raquo;</a></p>
				</div>

				<div class="span4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn" href="#">View details &raquo;</a></p>
				</div>

				<div class="span4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn" href="#">View details &raquo;</a></p>
				</div>

			</div><!-- End row -->

    </div> <!-- /container -->
<?php $this->load->view('components/page_tail') ?>
