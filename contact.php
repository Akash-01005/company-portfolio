
<?php include('./includes/header.php'); ?>

<!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Get In Touch With Us
              </h2>
            </div>
            <form action="./server/email.php" method="POST">
              <div>
                <input type="text" placeholder="Full Name " name='name' />
              </div>
              <div>
                <input type="email" placeholder="Email" name='email'/>
              </div>
              <div>
                <input type="text" placeholder="Phone number" name='phone no' />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="msg" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


 <?php include('./includes/footer.php'); ?>