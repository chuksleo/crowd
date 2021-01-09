<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$data['catregories'] = $categories;
$this->load->view('section/header', $data);
?>

<section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6  login-box">
                    <h1><?php echo lang('login_heading'); ?></h1>
                    <p><?php echo lang('login_subheading'); ?></p>


                        <?php echo form_open("auth/login"); ?>

                         <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                            <?php echo lang('login_identity_label', 'identity'); ?>
                            <?php echo form_input(isset($identity)? $identity : ""); ?>
                            </div>
                        </div></div>

                         <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('login_password_label', 'password'); ?>
                                        <?php echo form_input(isset($password)? $password : ""); ?>
                            </div>
                       </div></div>

                         <div class="row">
                                    <div class="col-xl-12">
                            <?php echo lang('login_remember_label', 'remember'); ?>
                            
                        <div class="switch">            
                            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="switch-input"'); ?>            
                            <label class="switch-paddle" for="remember">
                                <span class="show-for-sr">Remember me</span>
                            </label>
                        </div>
                        </p>


                         <div class="place_order_btn">
                         <?php echo form_submit('submit', lang('login_submit_btn'), array("class" => "thm-btn")); ?></div>

                        <?php echo form_close(); ?>

                        <p><a href="forgot_password" class="button"><?php echo lang('login_forgot_password'); ?></a></p>




                    </div>
                </div>
            </div>
</section>

<?php
//Loading footer
$this->load->view('section/footer');
?>