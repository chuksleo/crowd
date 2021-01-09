
<?php
//Loading header
$data['title'] = 'Login';
$data['catregories'] = $categories;
$this->load->view('section/header', $data);
?>
<section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 login-box">

                            <div class="billing_title">
                                     <h1><?php echo lang('create_user_heading'); ?></h1>
                                    <p><?php echo lang('create_user_subheading'); ?></p>

                            </div>


                        <div id="infoMessage"><?php echo $message; ?></div>

                                    <?php echo form_open("auth/create_user"); ?>

                                   <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                                        <?php echo form_input($first_name); ?></div>
                                   </div></div>

                                    <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                                        <?php echo form_input($last_name); ?></div>
                                    </div></div>

                                    <?php
                                    if ($identity_column !== 'email') {
                                        echo '<p>';
                                        echo lang('create_user_identity_label', 'identity');
                                        echo '<br />';
                                        echo form_error('identity');
                                        echo form_input($identity);
                                        echo '</p>';
                                    }
                                    ?>

                                    <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        
                                        <?php echo form_input($company); ?></div>
                                    </div></div>

                                    <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('create_user_email_label', 'email'); ?> <br />
                                        <?php echo form_input($email); ?></div>
                                    </div></div>

                                     <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                                        <?php echo form_input($phone); ?></div>
                                    </div></div>

                                    <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('create_user_password_label', 'password'); ?> <br />
                                        <?php echo form_input($password); ?></div>
                                    </div></div>

                                    <div class="row">
                                    <div class="col-xl-12">
                                    <div class="billing_input_box">
                                        <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                                        <?php echo form_input($password_confirm); ?></div>
                                     </div></div>


                                    <div class="place_order_btn">
                                    <?php echo form_submit('submit', lang('create_user_submit_btn') , array("class" => "thm-btn")); ?></div>

                                    <?php echo form_close(); ?>
                                


                        </div>


















                    </div>
                 </div>
            </div>
</section>

<div class="columns" >
    <div class="medium-6 medium-centered large-6 large-centered small-6 small-centered">
       
        
</div>
<?php
//Loading footer
$this->load->view('section/footer');
?>