<?php  include("connection.php");

$id= $_GET['id'];

$query = "SELECT * FROM appointment WHERE id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);
    

?>



<!doctype html>
<html lang="en">
  <head>
  	<title>Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="contact/css/style.css">

	</head>
	<body>
	
	<section class="ftco-section">
	<h2 style="text-align:center; color:#6208d6 ">Update Details</h2>
		<div class="container">
			
			
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Enter Carefully</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" value="<?php echo $result['name']; ?>" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" value="<?php echo $result['email']; ?>" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="subject">Choose Doctor</label>
													
													<select class="form-control" name="subject" id="subject" >
														<option value="Eye Specialist">Dr Rudolph</option>
														<option value="ENT Specialist">Dr Aahaan</option>
														<option value="Cancer Specialist">Dr Radhika</option>
														<option value="Depression Specialist">Dr James</option>
														<option value="Physiotherapist">Dr Angela</option>
														<option value="Dentist">Dr Stylar</option>

													  </select>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="date">Date</label>
													<input type="date" value="<?php echo $result['date']; ?>" class="form-control" name="date" id="date" placeholder="Date">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message"  class="form-control" id="message" cols="30" rows="4" placeholder="Message"><?php echo $result['message']; ?></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Update " name="update" class="btn btn-primary">
													
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Reach Us Out Here</h3>
									<p class="mb-4">We're open for resolving your queries anytime.</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> Jalandhar, India</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+91 8899665588</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">healnfeel@gmail.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">healnfeel.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="contact/js/jquery.min.js"></script>
  <script src="contact/js/popper.js"></script>
  <script src="contact/js/bootstrap.min.js"></script>
 
  <script src="contact/js/main.js"></script>

	</body>
</html>

<?php

if($_POST['update'])
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $query= "UPDATE appointment set name='$name',email='$email',subject='$subject',date='$date',message='$message' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "<script>alert('Data Updated')</script>";
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/healthcare/login/display.php# " />
         <?php   
    }
 
    else
    {
        echo "Failed";
    }




}

?>

