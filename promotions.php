<?php
  $page_title = "Promotions - Carina Snyman Designs";
  include 'includes/header.php';
?>

      <section class="hero-wrap" style="background-image: url('images/Slider/promotions.jpg');" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters text align-items-end justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 ftco-animate text-center">
	            <h1 class="mb-5 bread">Current promotions</h1>
	          </div>
	        </div>
	      </div>
      </section>
      <!-- END slider -->

      <section id="faqs">

        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-35 text-center heading-section ftco-animate">
                <h2 class="mb-4">Here you will find all my current promotions</h2>
                <p></p>
            </div>
            </div>
        </div>
      

        <section>
            <div class="container">
                <div class="card mb-3">
                    <img class="card-img-top" src="images/promotions/free_veil_offer.jpg" alt="Free Veil Offer">
                    <div class="card-body">
                        <h5 class="card-title">FREE PLAIN EDGED VEIL WITH YOUR DRESS</h5>
                        <p class="card-text">Complete the form, order your dress and pay your deposit before 31 March 2020!</p>
                        <p class="card-text"><small class="text-muted">*Terms and Conditions: Offers only valid until 31 March 2020. Offer only includes a Plain Edged Veil when ordering a Custom Wedding Dress. A Non-Refundable Deposit needs to be paid before 31 March 2020 in order to qualify. No orders placed after 31 March 2020 will be eligible for this special.</small></p>
                        <p class="card-text">Complete the short form below to qualify.</p>
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
                          <label for="Your Number">Number</label>
                            <input name="number" id="number" type="tel" class="form-control" placeholder="000 000 0000">
                          </div>
                          <div class="form-group">
                          <label for="Wedding Date.">Wedding Date</label>
                            <input name="date" id="date" type="date" class="form-control" placeholder="">
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

      </section>


<?php include 'includes/footer.php' ; ?>