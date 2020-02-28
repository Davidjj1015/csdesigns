<?php
  $page_title = "Contact - Carina Snyman Designs";
  include 'includes/header.php';
?>

      <section class="hero-wrap" style="background-image: url('images/Slider/Custom_Evening_Wear.jpg');" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <h1 class="mb-5 bread">Contact</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->

      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
						<div class="col-md-4 order-last contact-info ftco-animate">
							<div class="row">
								<div class="col-md-12 mb-4">
		              <h2 class="h2">Contact Information</h2>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Phone:</span> <a href="tel://0716096237">(071) 609 6237</a></p>
		              <p><span>Email:</span> <a href="mailto:info@carinasnyman.co.za">info@carinasnyman.co.za</a></p>
		            </div>
							</div>
						</div>

            <!-- Contact form added and working, just needs image upload button and captcha, other files associated submit.php $ submit.js-->
            <div class="col-md-1"></div>
            <div class="col-md-6 order-first ftco-animate">
              <form id="myForm" method="post">
                <div class="form-group">
                  <label for="Your Name">Name</label>
                    <input name="name" id="name" type="text" class="form-control" placeholder="Your Name">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your email">
                </div>
                <div class="form-group">
                <label for="000 000 0000">Number</label>
                  <input name="number" id="number" type="tel" class="form-control" placeholder="000 000 0000">
                </div>
                <div class="form-group">
                <label for="Wedding dress, evening dress, etc.">Subject</label>
                  <input name="subject" id="subject" type="text" class="form-control" placeholder="Wedding dress, evening dress, etc.">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea cols="30" rows="7" name="message" id="message" type="text" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Send Message" class="btna btn-primary py-3 px-5" name="send message">
                </div>
              </form>
              <div id="results"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact form added and working, just needs image upload button and captcha, other files associated submit.php $ submit.js-->

<?php include 'includes/footer.php' ; ?>
