
<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$this->load->view('section/header', $data);
?>
 
<?php if (!isset($page)):?>

 <!--Page Header Start-->
        <section class="page-header" style="background-image: url(<?php echo base_url()?>assets/images/backgrounds/contact.jpeg);">
            <div class="container">
                <h2><?php echo "Donate " ?></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><span><?php echo "Donate" ?></span></li>
                </ul>
            </div>
        </section>

  <?php endif ?>  <br></br>
 
 <!--Contact One single-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                   <div class="col-xl-5">
                        <div class="contact_one_left">
                            <div class="block-title text-left">
                                



                                <div class="project_details_image">

                        <?php if($campaign->image == null){ ?>    <img src="<?php echo base_url()?>assets/images/project/project_details_img-1.jpg" alt=""> <?php }else{ ?>

                          <img src="<?php echo base_url()?>uploads/campaign/profile/<?php echo $campaign->image ?>" alt="<?php echo $campaign->Title ?> image">


                          <?php } ?>
                        </div> <br><br>  <h4><?php echo $campaign->Title ?></h4>



                        <div class="project_details_right_top">
                                <ul class="project_details_rate_list list-unstyled">
                                    <li><span>₦<?php echo $campaign->Current ?></span>Raised</li>
                                    <li><span><?php echo $donors ?></span>Donors</li>
                                </ul>
                            </div>

                          <div class="progress-levels project_details_progress-levels">
                            <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="<?php echo $percentage ?>"><?php echo $percentage ?></span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="<?php echo $percentage ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="contact_one_left-text">
                                <p>NOTE: Payment is processed via Paystack you will recive and Comfirmatory message after payment via Email.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-one__form__wrap">
                        <div id="submessage_footer"></div>
                            <form id="paymentForm" class="contact-one__form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input id="names" type="text" name="name" placeholder="Your Full Name " required="true">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input id="email-address" type="email" name="email" placeholder="Email address" required="true">
                                        </div>
                                    </div>
                                    

                                     <div class="col-md-6">
                                        <div class="input-group">
                                            <input id="amount" type="text" name="Phone" placeholder="Amount" required="true">
                                        </div>
                                    </div>



                                     <div class="col-md-6">
                                        <div class="input-group">
                                          <select id="countries"  required="true">
                                          <option>Select Country</option>
                                          <?php foreach($countries as $country):?>
                                          		
                                          		<option value="<?php echo $country->iso3 ?>"><?php echo $country->nicename ?></option>

                                           <?php endforeach  ?>
                                          </select>
                                        </div>
                                    </div>


                                     <div class="col-md-12">
                                        <div class="input-group">
                                            <textarea placeholder="leave a brief comment*" id="comments"  rows="10" cols="40" name="comment" required="true"></textarea>
                                        </div>
                                    </div>

                                    <input type="hidden" id="campaign_id" value="<?php echo $campaign->CampaignId ?>">
                                     <input type="hidden" id="userid" value="<?php echo $campaign->UserId ?>">
                                     <input type='hidden' id="baseUrl" value="<?php  echo base_url(); ?>" /> 

                                   
                                    <div class="col-md-12">
                                        <div class="input-group contact__btn">
                                            <span>Make anonymous donation: <input type="checkbox" name="" id="ananymous" value="yes" checked="false">    </span>
                        <button type="button" class="thm-btn contact-one__btn" onclick="payWithPaystack()">Pay Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://js.paystack.co/v1/inline.js"></script>




<?php

$this->load->view('section/footer');
?>
