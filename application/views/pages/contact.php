


<?php if (!isset($page)):?>

 <!--Page Header Start-->
        <section class="page-header" style="background-image: url(<?php echo base_url()?>assets/images/backgrounds/contact.jpeg);">
            <div class="container">
                <h2><?php echo $page_name ?></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><span><?php echo $page_name ?></span></li>
                </ul>
            </div>
        </section>

  <?php endif ?>

  <!--Google Map-->
         <section class="google_map google_map_two">
            <div class="container">

           <!--  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.7228565375235!2d8.344105015126248!3d4.985644696380753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106787a2092c5ba7%3A0x743e32549c35136a!2s6a%20Housing%20Estate%20Rd%2C%20Atekong%20540222%2C%20Calabar!5e0!3m2!1sen!2sng!4v1607860067975!5m2!1sen!2sng"  class="google-map__contact" allowfullscreen></iframe> -->
          
            </div>
        </section>

        <!--Three Boxes Two Start-->
        <section class="three_boxes three_boxes_two">
            <div class="container">
                <div class="row">
                   
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Boxes single-->
                        <div class="three_boxes_single">
                            <div class="three_boxes_content">
                                <h3><i class="fa fa-phone"> </i> Available 24/7</h3>
                                <p><a href="tel:123456789"><?php echo $settings['phone'] ?></a></p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Boxes single-->
                        <div class="three_boxes_single">
                            <div class="three_boxes_content">
                                <h3> <i class="fa fa-envelope"></i> Send Email For Inquiry </h3>
                                <p><a href="mailto:<?php echo $settings['email'] ?>"><?php echo $settings['email'] ?></a></p>
                            </div>
                           
                        </div>
                    </div>



                     <div class="col-xl-4 col-lg-4">
                        <!--Three Boxes single-->
                        <div class="three_boxes_single">
                            <div class="three_boxes_content">
                                <h3> <i class="fa fa-map-marker"></i> Office Address</h3>
                                <p><a href="mailto:needhelp@jitsin.com"><?php echo $settings['address'] ?></a></p>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>





         <!--Contact One single-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                   <div class="col-xl-5">
                        <div class="contact_one_left">
                            <div class="block-title text-left">
                               <div class="block_title_icon">
                                    <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                                </div>
                                <p>Contact With Us</p>
                                <h3>We Love to Hear From You</h3>
                            </div>
                            <div class="contact_one_left-text">
                                <p><?php echo lang('contact_message')?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-one__form__wrap">
                            <form id="contactForms" class="contact-one__form">

                                <div class="row">
                                   <div id="contact_rmessage" class="col-md-12"></div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" id="contact_fname" placeholder="First Name*" size="40" value="" name="your-name" required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                           <input type="text" id="contact_lname" placeholder="Last Name*"  size="40" value="" name="last-name" required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="email" id="contact_email" placeholder="E-mail address*"  size="40" value="" name="your-email" required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                           <input type="text" id="contact_phone" placeholder="Phone Number" size="40" value="" name="your-phone" required="true">
                                        </div>
                                    </div>



                                     <div class="col-md-12">
                                        <div class="input-group">
                                           <input type="text" id="contact_subject" placeholder="Subject*"  size="40" value="" name="your-subject" required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <textarea placeholder="Message*" id="contact_message"  rows="10" cols="40" name="your-message" required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group contact__btn">
                                        <button type="button" class="thm-btn contact-one__btn" onclick="contact_us()"> Send Message</button>
                                            <!-- <input type="button" onclick="contact_us()" value="Send Message" class="thm-btn contact-one__btn"> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		
