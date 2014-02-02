<?php include 'includes/header.php'; ?>
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Registration Forms</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Registration Forms</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
			<div class="span6">
						<h2 class="short">Registration Forms</h2>
						<p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
								<form action="">

									<h3>Who you are?</h3>
									<p>Select from the dropdown</p>
									<select class="form-control">
									  <option>Select</option>
									  <option>Doctor</option>
									  <option>Patient</option>
									  <option>Technician</option>
									  
									</select>
									<label for="name">User Name</label>
									<input type="text" value="" maxlength="100" class="span3" name="name" id="name" placeholder="Name">
									<label for="fname">Father's Name</label>
										<input type="text" value="" maxlength="100" class="span3" name="fname" id="fname" placeholder="Father's Name">
									<label for="cnic">CNIC</label>
										<input type="text" value="" maxlength="100" class="span3" name="cnic" id="cnic" placeholder="XXXXX-XXXXXXX-X">
									<label for="Email">Email</label>
										<input type="text" value="" maxlength="100" class="span3" name="Email" id="Email" placeholder="name@company.com">
										<label for="Cell">Cell</label>
										<input type="text" value="" maxlength="100" class="span3" name="Cell" id="Cell" placeholder="03XX-XXXXXXX">
										<label for="address">Address</label>
										<input type="text" value="" maxlength="100" class="span3" name="address" id="Cell" placeholder="Address">
										<label for="City">City</label>
										<input type="text" value="" maxlength="100" class="span3" name="City" id="Cell" placeholder="City">
										<label for="Country">Country</label>
										<input type="text" value="" maxlength="100" class="span3" name="Country" id="Cell" placeholder="Country">
										<label for="Date of Birth">Date of Birth</label>
										<input type="text" value="" maxlength="100" class="span3" name="Date of Birth" id="Cell" placeholder="Date of Birth">
										<label for="gender">Gender</label>
										<input type="radio" name="gender"> Male
										<input type="radio" name="gender"> Female

										<label for="password">Password</label>
										<input type="password" id="passowrd" placeholder="Password">
										<label for="password">Repeat Password</label>
										<input type="password" id="passowrd" placeholder="Repeat Password">
										<br>
										<input class="btn btn-primary" type="button" value="Submit">

										<p></p>
										<h3>Doctor's Form</h3>

										<form action="">
											<label for="name">Clinic Name</label>
									<input type="text" value="" maxlength="100" class="span3" name="name" id="name" placeholder="Clinic Name">
									<label for="address">Clinic Address</label>
										<input type="text" value="" maxlength="100" class="span3" name="address" id="address" placeholder="Clinic Address">
									<label for="Location">Location</label>
										<input type="text" value="" maxlength="100" class="span3" name="Location" id="Location" placeholder="Location">
									<label for="Qualification">Qualification</label>
										<input type="text" value="" maxlength="100" class="span3" name="Qualification" id="Qualification" placeholder="Qualification">
										<label for="Specialization">Specialization</label>
										<input type="text" value="" maxlength="100" class="span3" name="Specialization" id="Specialization" placeholder="Specialization">
									<label for="Practice">Practice</label>
										<input type="text" value="" maxlength="100" class="span3" name="Practice" id="Practice" placeholder="Practice">
										<br>
										<input class="btn-primary btn" type="button" value="Submit">
										
										<p></p>
										<h3>Pharmacy Form</h3>
										<label for="reg">Registration No</label>
										<input type="text" id="reg" placeholder="XXXXX">
										<label for="shopadd">Shop Address</label>
										<input type="text" id="shopadd" placeholder="Shop Address">
										<br>
										<input class="btn-primary btn" type="button" value="Submit">
										<p></p>
										<h3>Login</h3>
										<label for="user">User Name</label>
										<input type="text" id="user" placeholder="User Name">
										<label for="password">Password</label>
										<input type="password" id="password">
										<br>
										<input class="btn-primary btn" type="button" value="Submit">
										</form>
										</div>
									</div>
								</div>
			
					</div>
				</div>
				<?php include 'includes/footer.php'; ?>