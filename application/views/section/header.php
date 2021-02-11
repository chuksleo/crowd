<!DOCTYPE html>
<html lang="en">
<?php //$settings_data = $this->settings_model->get_all_settings();
      //$settings = $settings_data[0];

?>


<?php

if ($this->ion_auth->logged_in()) {
    $project = $this->project_model->get_user_project($this->ion_auth->user()->row()->id);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title ?></title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/images/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/images/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url()?>assets/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>assets/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url()?>assets/images/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url()?>assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vegas.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jitsin_iconl.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
<script>
var contactForm = document.getElementById('contactForm');
contactForm.addEventListener('submit', contact_us, false);




function payWithPaystack() {
    
 var name = $('input#names').val();
  var campaign = $('input#campaign_id').val();
  var user = $('input#userid').val();
  var comment = $('textarea#comments').val();

  var ananymous = $('input#ananymous').val(); 
  var country = $('select#countries').val();
  var refCode = makeRef(country, 10);
  var email = $('input#email-address').val();
  var amount = $('input#amount').val();
 
  var handler = PaystackPop.setup({
    // key: 'pk_test_dd87a5df97a4abf3c3cea7e07d0167ad4aeaea4a',
    key: 'pk_live_2102e50beab71e0a9fd3f503e1a8231d6f355e96', // Replace with your public key
    email: email,
    amount: amount * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: refCode, // Replace with a reference you generated

    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){
       
      savePayment(amount, name, email, country, refCode, campaign, user, comment, ananymous);    
     

    }

  });
  handler.openIframe();
}



function makeRef(country, length) {

    console.log(country);
   
   var val           = '';
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      val += characters.charAt(Math.floor(Math.random() * charactersLength));
   }

   result = country+val;
   return result;
}

 
//function savePayment(amount, name, email, country, refCode, campaign, user, comment, ananymous){
function savePayment(amount, name, email, country, refCode, campaign, user, comment, ananymous){
 
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url(); ?>donation/makePayment',
      data: {'amount_val':amount,'name_val':name,'email_val':email,'country_val':country,'refCode_val':refCode,'campaign_val':campaign,'user_val':user,'comment_val':comment,'ananymous_val':ananymous},

      success: function(resp) {
           $("#submessage_footer").html(resp);

       }

     });
  
  

 }




        function subscribe_bottom()
        {

            console.log("btn cliced");
            var email_cont = $('input#email-address').val();


            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>email/subscribe_email',
                data: {'email_val':email_cont},

                success: function(resp) {
                     $("#submessage_footer").html(resp);
                }

            });
        }



        function contact_us()
        {
            //$('input#loader').show();
            var fname = $('input#contact_fname').val();
            var lname = $('input#contact_lname').val();
            var email = $('input#contact_email').val();
            var phone = $('input#contact_phone').val();
            var subject = $('input#contact_subject').val();
            var message = $('textarea#contact_message').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>email/contact',
                data: {'fname_val':fname,'lname_val':lname,'email_val':email,'phone_val':phone,'subject_val':subject,'message_val':message},

                //data: 'email_vals='+email,

                success: function(resp) {

                    //$('#prog').hide();
                     $("#contact_rmessage").html(resp);
                }

            });
        }


        function showAllCategories()
        {
            $('#bank-form').show();
            $('#bankbutton').hide();
            $('#pay_bmessage').hide();
        }


        function bank_pay()
        {
            console.log(CSRF_TOKEN);
            $('#spin').show();
            var fname = $('input#contact_fname').val();
            var lname = $('input#contact_lname').val();
            var email = $('input#contact_email').val();
            var phone = $('input#contact_phone').val();
            var bank = $('select#contact_bank').val();
            var transac_num = $('input#t_number').val();
            var amount = $('input#t_amount').val();
            var p_id = $('select#project_id').val();
            var pay_type = $('input#pay_type').val();
            var comment = $('textarea#comment').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>pay',
                data: {'fname_val':fname,'lname_val':lname,'email_val':email,'phone_val':phone,'bank_val':bank,'transac_num_val':transac_num,'amount_val':amount,'project_id_val':p_id,'pay_type_val':pay_type,'comment_val':comment},

                //data: 'email_vals='+email,

                success: function(resp) {

                    $('#spin').hide();
                     $("#pay_bmessage").html(resp);
                     document.getElementById('pay_bmessage').style.display="block";
                     document.getElementById('bankbutton').style.display="block";

                     document.getElementById('bank-form').style.display="none";
                }

            });
        }







    </script>

</head>

<body>

    <div class="preloader">
        <img src="<?php echo base_url()?>assets/images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">


        <div class="site-header__header-one-wrap clearfix">

            <div class="site-header__header-one-wrap-left">
                <a href="<?php echo base_url()?>" class="main-nav__logo">
                    <img src="<?php echo base_url()?>assets/images/resources/logo.png" class="main-logo" alt="Awesome Image">
                </a>
            </div>

            <header class="main-nav__header-one">

                <div class="main-nav__header-one-top clearfix">
                    <div class="border-bottom"></div>
                    <div class="button"><a href="<?php echo base_url()?>campaign/create">Start a Campaign</a></div>

                     <nav class="header-navigation">
                    <div class="main-nav__header-one-top-left">
                        <ul class=" main-nav__navigation-box">
                            <li><a href="#"> <i class="icon-conversation"></i> Customer Support</a></li>
                            <?php if ($this->ion_auth->logged_in() == false) { ?>
                             <li><a href="<?= base_url() ?>auth/login"> <i class="icon-user"></i> Login</a></li>
                              <li><a href="<?= base_url() ?>auth/create_user"> <i class="icon-conversation"></i> Register</a></li>

                            <?php }else{ ?>


                                <li class="nav-item mr-1 dropdown show">
                                      <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="https://fundme.miguelvasquez.net/public/avatar/41603975788awbmmdsa9wwpviu.jpg" alt="User" class="rounded-circle avatarUser" width="25" height="25">
                                                        <span class="d-lg-none">My Profile</span>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right dd-menu-user show" aria-labelledby="dropdown03">

                                                        <a class="dropdown-item" href="https://fundme.miguelvasquez.net/panel/admin">Panel Admin</a>
                                        <div class="dropdown-divider"></div>
                                      
                                      <a href="#" class="dropdown-item">
                                        Dashboard
                                        </a>

                                      <a href="#" class="dropdown-item">
                                      Campaigns
                                        </a>

                                      <a href="#" class="dropdown-item">
                                        Likes
                                        </a>

                                      <a href="#" class="dropdown-item">
                                        Account Settings
                                        </a>
                                        <div class="dropdown-divider"></div>

                                      <a href="#" class="logout dropdown-item">
                                        Log out
                                      </a>

                                      </div>
                                    </li>

                            <?php } ?>
                           
                        </ul>
                    </div></nav>
                   
                </div>

                <nav class="header-navigation one stricky">
                    <div class="container-box clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left">
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <div class="main-nav__main-navigation">
                            <ul class=" main-nav__navigation-box">
                                <li class="dropdown ">
                                    <a href="<?php  echo base_url() ?>"><?php  echo "HOME"?></a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="<?php echo base_url() ?>#">FUNDRAISER FOR</a>
                                    <ul>
                                         <?php foreach ($categories as $cat): ?>
                                            <li><a href="<?= base_url() ?>category/<?= $cat->title ?>/<?= $cat->catId ?>"><?= $cat->title ?></a></li>


                                        <?php endforeach ?>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li class="">
                                    <a href="<?php echo base_url() ?>pages/how-it-works"><?php  echo "HOW IT WORKS" ?></a>
                                </li>
                              
                                <li class="dropdown">
                                    <a href="<?php echo base_url() ?>donofund-blog"><?php  echo "BLOG" ?></a>
                                  
                                </li>
                                
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->

                        <div class="main-nav__right">
                            <div class="phone-mail-box">
                                <ul>
                                    <li><span class="fas fa-envelope"></span><a href="mailto:"></a></li>
                                    <li><span class="fa fa-phone"></span><a href="tel:"></a></li>
                                </ul>
                            </div>
                            <div class="icon-search-box">
                                <a href="#" class="main-nav__search search-popup__toggler">
                                    <i class="icon-magnifying-glass"></i>
                                </a>
                            </div>
                           <!--  <div class="icon_cart_box">
                                <a href="cart.html">
                                    <span class="icon-shopping-cart"></span>
                                </a>
                            </div> -->
                        </div>

                    </div>
                </nav>
            </header>
        </div>




















    
    <!--  -->