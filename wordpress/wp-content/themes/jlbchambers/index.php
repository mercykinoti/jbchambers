<?php get_header(); ?>
		<div class="container">
		<hr>
			<?php if ( has_post_thumbnail() ) {
  				the_post_thumbnail();
			} ?>
			<img src="<?php echo get_bloginfo('template_directory'); ?>/images/cover.jpg" class="img-fluid">	
		</div>	
		<div class="container">
			<section class="teamy">
				<div class="row">
					<div class="col-md-4">
						<hr>
						<div class="card-style">
							<div class="card-block">
								<h4 class="card-title">Our Team</h4>
								<p>We are an entrepreneurial law firm, in which legal professionals bring their expertise and passion for the law into an environment focused on high quality work, client satisfaction and community involvement.</p>
								<a href="team.php"><button class="btn btn-default">More</button></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<hr>
						<div class="card-style">
							<div class="card-block">
								<h4 class="card-title">Practice Areas</h4>
								<p>We can assist with a wide variety of legal needs relating to Financial Services, Public Sector, Information and Communication Technology (ICT), Agriculture, Manufacturing, Transport and Logistics, and Tourism among others.</p>
								<a href="practice.php"><button class="btn btn-default">More</button></a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
					<hr>
						<div class="card contact-card practice-areas">
							<div class="card-block">
								<h4 class="card-title">Contact Us</h4>
								<p>FOR A CONSULTATION</p>
								<a href="contact.php"><button class="btn btn-default">SCHEDULE A CONSULTATION</button></a>
								<p>Tell: <b class="contact-text">020 4405958</b><br> Cell: <b class="contact-text"> 0741 185958, 0780 185958</b></p>
								<p class="contact-text">Nairobi Office <br> JB Chambers LLP <br> Madonna House, Office Suite M13 <br>03 Westlands Road <br>P.O. Box 14411-00800, Westlands <br> Nairobi, Kenya</p>
								<p>Email <br> <b class="contact-text">info@jbchambersllp.com</b></p>
							</div>
						</div>
						<hr>
					</div>
				</div>
				<div class="row">
				<div class="col-md-8">
					<div class="card-style">
						<div class="card-block">
							<h4 class="card-title">News and Publications</h4>
							<div class="row">
								<div class="col-md-4">
									<img src="<?php echo get_bloginfo('template_directory'); ?>/images/cover.jpg" class="img-fluid">
								</div>
								<div class="col-md-8">									
									<h4>News and Insights</h4>
									<p class="p-font">Please click the link below to read more about helpful tips, news and information on legal topics that impact you from our dedicated team of Legal Counsels.</p>
									<a class="contact-a" href="">READ MORE ...</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<img src="<?php echo get_bloginfo('template_directory'); ?>/images/cover.jpg" class="img-fluid">
								</div>
								<div class="col-md-8">
									<h4>News and Insights</h4>
									<p class="p-font">Please click the link below to read more about helpful tips, news and information on legal topics that impact you from our dedicated team of Legal Counsels.</p>
									<a href="" class="contact-a">READ MORE ...</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-style practice-areas">
						<div class="card-block">
							<h4 class="card-title">Areas of Practice</h4>
							<ul class="list">
								<li>Banking & Finance</li>
								<li>Corporate & Commercial</li>
								<li>Debt Management</li>
								<li>Dispute Resolution</li>
								<li>Employment & Immigration</li>
								<li>Intellectual Property</li>
								<li>Private Client Services</li>
								<li>Real Estate & Property</li>
								<li>Sector-related Services​</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			</section>
			<hr>		
		</div>
		<?php get_footer(); ?>
		