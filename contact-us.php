<?php include 'includes/header.php'; ?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Contact Us</h2>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps -->
				<div id="googlemaps" class="google-map hidden-phone"></div>

				<div class="container">

					<div class="row">
						<div class="span6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-error hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="short"><strong>Contact</strong> Us</h2>
							<form action="" id="contactForm" type="post">
								<div class="row controls">
									<div class="span3 control-group">
										<label>Your name *</label>
										<input type="text" value="" maxlength="100" class="span3" name="name" id="name">
									</div>
									<div class="span3 control-group">
										<label>Your email address *</label>
										<input type="email" value="" maxlength="100" class="span3" name="email" id="email">
									</div>
								</div>
								<div class="row controls">
									<div class="span6 control-group">
										<label>Subject</label>
										<input type="text" value="" maxlength="100" class="span6" name="subject" id="subject">
									</div>
								</div>
								<div class="row controls">
									<div class="span6 control-group">
										<label>Message *</label>
										<textarea maxlength="5000" rows="10" class="span6" name="message" id="message"></textarea>
									</div>
								</div>
								<div class="btn-toolbar">
									<input type="submit" value="Send Message" class="btn btn-primary btn-large" data-loading-text="Loading...">
								</div>
							</form>
						</div>
						<div class="span6">

							<h4 class="pull-top">Get in <strong>touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

							<hr />

							<h4>The <strong>Office</strong></h4>
							<ul class="unstyled">
								<li><i class="icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
								<li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr />

							<h4>Business <strong>Hours</strong></h4>
							<ul class="unstyled">
								<li><i class="icon-time"></i> Monday - Friday 9am to 5pm</li>
								<li><i class="icon-time"></i> Saturday - 9am to 2pm</li>
								<li><i class="icon-time"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<?php include 'includes/footer.php'; ?>