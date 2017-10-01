<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
		<section class="contact">
			<div class="container">
				<hr>
			<h1>Contact</h1>
				<div class="row">
					<div class="col-md-8">
						<h3 class="head-text">Address</h3>
						<p>Nairobi Office <br> JB Chambers LLP <br> Madonna House, Office Suite M13<br>03 Westlands Road <br> P.O. Box 14411-00800, Westlands <br>Nairobi, Kenya</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8456799869127!2d36.80296461524845!3d-1.2651616990772152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173fc05e59f5%3A0x6226597ff8c3a708!2sm13%2C+Madonna+House%2C+Nairobi!5e0!3m2!1sen!2ske!4v1505757667717" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4">
						<h3 class="head-bord">Telephone</h3>
						<div class="contact-a">
							<p>Tel: 020 4405958 <br> Cell: 0741 185958, 0780 185958</p>
							<h3 class="contact-a">E-mail</h3>
							<p>info@jbchambersllp.com</p>
						</div>
						<form>
							<fieldset class="form-group">
								<input type="text" class="form-control" id="Name" placeholder="Name">
							</fieldset>
							<fieldset class="form-group">
								<input type="email" class="form-control" id="Email" placeholder="Email">
							</fieldset>
							<fieldset class="form-group">
								<input type="text" class="form-control" id="Subject" placeholder="Subject">
							</fieldset>
							<fieldset class="form-group">
								<textarea class="form-control" rows="3" placeholder="Message"></textarea>
							</fieldset>
							<button type="submit" class="contact submit">Send</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>
		