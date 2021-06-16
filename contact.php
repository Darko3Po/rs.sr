<?php $title = "RS.SR | Najčešća pitanja" ?>
<?php require 'particles/header.php' ?>
    <!-- Add navbar -->
<section style="background-color: #1e4356;"></section>
    <!-- Contact email -->
<section class="contact d-flex justify-cntent-center align-items-center" data-aos="fade-up" data-aos-easing="ease-in-out"data-aos-duration="500">
       <div class="col-md-6">
                <div class="info-box">
                <i class="fas fa-envelope"></i>
                  <h3>Kontaktirajte nas </h3>
                   <h6>info@rs.sr</h6>
                </div>
              </div>
            <!-- Form for mess on email -->
         <div class="col-lg-6">
            <form action="https://eankete.com/sr/register" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ime" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="surname" class="form-control" id="name" placeholder="Prezime" required>
                </div>
               </div>

               <div class="form-group mt-3">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
</section>

 <?php include 'particles/footer.php' ?>