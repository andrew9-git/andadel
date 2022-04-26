<?php

  include('includes/header.php');
  $description = "We aim to provide great customer service. For product inquiries, technical support and legal questions, here are all the ways you can contact Andadel. We'll find you the best solution. Connect by phone, chat, email, and more.";
  andadelHeader('Contact Us - Andadel', 'contact', $description);

?>


    <div class="contact">
        <div class="contact-container">
            <div class="content">
              <div class="left-side">
                <div class="address details">
                  <i class="bx bx-map"></i>
                  <div class="topic">Address</div>
                  <div class="text-one">5, Fashola Street, Irawo,</div>
                  <div class="text-two">Ikorodu Road, Lagos, Nigeria</div>
                </div>
                <div class="phone details">
                  <i class="bx bx-phone"></i>
                  <div class="topic">Phone</div>
                  <div class="text-one">+234906 693 8955</div>
                  <div class="text-two">+234816 500 7219</div>
                </div>
                <div class="email details">
                  <i class="bx bxs-inbox"></i>
                  <div class="topic">Email</div>
                  <div class="text-one">customercare@andadel.com</div>
                  <div class="text-two">info@andadel.com.com</div>
                </div>
              </div>
              <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>Get in touch with us today</p>
              <form action="#">
                <div class="form-group">
                  <input type="hidden" class="form-control" name="csrf" value="" id="csrf">
                </div>
                <div class="input-box">
                  <input type="text" placeholder="Enter your name">
                </div>
                <div class="input-box">
                  <input type="text" placeholder="Enter your email">
                </div>
                <div class="input-box">
                  <input type="text" placeholder="Enter your subject">
                </div>
                <div class="input-box message-box">
                  <textarea placeholder="Enter your message"></textarea>
                </div>
                <div class="button">
                  <input type="button" value="Send Now" >
                </div>
              </form>
                </div>
            </div>
        </div>
    </div>

<?php

    include('includes/footer.php');

?>