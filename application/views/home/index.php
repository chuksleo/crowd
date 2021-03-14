
        <!-- Banner Section One Start -->
        <section class="banner-section banner-one">
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(<?php echo base_url() ?>uploads/banner/banner1.jpg);">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="slider_icon"><img src="<?php echo base_url()?>assets/images/loader.png"
                                            alt=""></div>
                                    <div class="sub-title">Raising Money Has Never Been So Easy</div>
                                    <h1>Fundraising For Causes You care about</h1>
                                   
                                    <div class="link-box">
                                        <a href="<?php echo base_url()?>campaign/create" class="thm-btn">Start a Campaign</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="slide-item">
                    <div class="image-layer" style="background-image: url(<?php echo base_url() ?>uploads/banner/banner2.jpg);">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content">
                                <div class="inner">
                                    <div class="slider_icon"><img src="<?php echo base_url()?>assets/images/loader.png"
                                            alt=""></div>
                                    <div class="sub-title">Raising Money Has Never Been So Easy</div>
                                    <h1>Crowdfunding &<br>Fundraising For Causes You care about</h1>
                                   
                                    <div class="link-box">
                                        <a href="<?php echo base_url()?>campaign/create" class="thm-btn">Start a Campaign</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Slide Item -->
               
                <!-- Slide Item -->
              
            </div>
        </section>

        <!--Categories One Start-->
        <section class="categories_one">
            <div class="categories_one_shape_one"
                style="background-image: url(assets/images/shapes/categories_one-shape-1.png)"></div>
            <div class="container">
             <div class="block-title text-center">
                    <h3> <?php echo ($this->settings_model->getStaticContent('home_header_one')) ?> </h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="">
                            <?php echo ($this->settings_model->getStaticContent('home_text_one')) ?>                         
                    
                            <p> Wecome to donofund </p>    
                            </div>
                            
                        </div>
                    </div>



                           
                </div>

                 

            </div>
        </section>

        <!--About One Start-->
        <section class="about_one">
            <div class="about_one_shape_one" style="background-image: url(assets/images/shapes/about_one_shape-1.png)">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="about_one_left">
                            <div class="thm_section_title_two">
                                <div class="sec__title_icon">
                                    <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                                </div>
                                <h2><?php echo ($this->settings_model->getStaticContent('home_header_two')) ?></h2>
                            </div>
                            <div class="about_one_text">
                              <?php echo ($this->settings_model->getStaticContent('home_text_two')) ?>
                            </div>
                            <div class="">
                                <a href="<?php echo base_url()?>campaign/create" class="thm-btn">Start A Campaign</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="about_one_right">
                            <div class="about_one_image_one">
                                <img src="<?php echo base_url() ?>assets/images/help.jpg" alt="">
                                <div class="image_one_shape"></div>
                            </div>
                            <div class="about_one_image_two">
                                <!-- <img src="assets/images/about/about-one-img-2.jpg" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Funtact One Start-->
        <section class="funfact_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="funfact_one_single wow fadeInUp">
                            <div class="funfact_one_icon">
                                <i class="icon-list"></i>
                            </div>
                            <h3><span class="counter">1200</span></h3>
                            <p>Campaign Completed</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="funfact_one_single wow fadeInUp" data-wow-delay="100ms">
                            <div class="funfact_one_icon">
                                <i class="icon-save-money"></i>
                            </div>
                            <h3><span class="counter">5000000</span></h3>
                            <p>Raised to Date</p>
                        </div>
                    </div>
                   <!--  <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="funfact_one_single wow fadeInUp" data-wow-delay="200ms">
                            <div class="funfact_one_icon">
                                <i class="icon-volunteer"></i>
                            </div>
                            <h3><span class="counter">440</span></h3>
                            <p>Partner Fundings</p>
                        </div>
                    </div> -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="funfact_one_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="funfact_one_icon">
                                <i class="icon-rating"></i>
                            </div>
                            <h3><span class="counter">1234</span></h3>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Explore Projects One Start-->
        <section class="explorep_projects_one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block_title_icon">
                        <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                    </div>
                    <p>Find A DonoFund Near You</p>
                    <h3>Explore Campaign(s)</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="projects_one_carousel owl-theme owl-carousel">

                       <?php foreach($campaigns as $campaign): 

                       $percentage = $this->campaign_model->getPercentageRaised($campaign->Amount, $campaign->Current);
                       $daysleft = $this->campaign_model->getDaysLeft($campaign->EndDate);

                      $link_text = $this->campaign_model->cleanTitle($campaign->Title);


                       ?>

                                 <div class="projects_one_single">
                                <div class="projects_one_img">
                                    <img src="<?php echo base_url() ?>uploads/campaign/profile/<?php echo $campaign->image ?>" alt="">
                                    <div class="project_one_icon">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                                <div class="projects_one_content">
                                    <div class="porjects_one_text">
                                        <p><span>by</span> <?php echo $campaign->first_name. " ". $campaign->last_name ;?></p>
                                        <h3><a href="<?php echo base_url() ?>campaign/<?php echo $link_text ?>/<?php echo $campaign->CampaignId?>"><?php echo $campaign->Title ?></a></h3>
                                    </div>
                                    <div class="progress-levels">
                                        <!--Skill Box-->
                                        <div class="progress-box">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">

                                                       
                                                        <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000" data-stop="<?php echo $percentage ?>"><?php echo $percentage ?></span>
                                                        <span class="percent">%</span>
                                                    </div>
                                                       
                                                <div class="bar-fill" data-percent="<?php echo $percentage ?>" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_categories">
                                        <div class="projects_categories_left">
                                            <div class="left_icon">
                                                <img src="assets/images/project/folder-icon.png" alt="">
                                            </div>
                                            <div class="left_text">
                                                <p><?php echo $campaign->title ?></p>
                                            </div>
                                        </div>
                                        <div class="projects_categories_right">
                                            <div class="right_icon">
                                                <img src="assets/images/project/flag.png" alt="">
                                            </div>
                                            <div class="right_text">
                                                <p>Nigeria</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects_one_bottom">
                                    <ul class="list-unstyled">
                                        <li>
                                            <h5>₦<?php echo $campaign->Current ?></h5>
                                            <p>Raised</p>
                                        </li>
                                        <li>
                                            <h5>₦<?php echo $campaign->Amount ?></h5>
                                            <p>Goal</p>
                                        </li>
                                        <li>
                                            <h5><?php echo $daysleft ?></h5>
                                            <p>Days Left</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                       <?php endforeach ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--  -->

        <!--video One Start-->
      


        <!--Creator Funded Start-->
        <section class="creator_funded">
            <div class="creator_funded_shape_1"
                style="background-image: url(assets/images/shapes/creator_funded-shape-1.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="creator_funded_left">
                            
                            <h2><?php echo ($this->settings_model->getStaticContent('home_header_four')) ?> </h2>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="creator_funded_right">
                            <ul class="three_benefits list-unstyled">
                                <li>
                                    <div class="three_benefits_icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="three_benefits_text">
                                        <p>Raise funds with a crowdfunding campaign</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="three_benefits_icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="three_benefits_text">
                                        <p>Extend your campaign with Indemand</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="three_benefits_icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="three_benefits_text">
                                        <p>Fast track to the global market</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Testimonial One Start-->
        <section class="testimonial_one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block_title_icon">
                        <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                    </div>
                    <p>Our Beneficiaries Testimonials</p>
                    <h3>What They Say</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one_carousel owl-theme owl-carousel">
                            <!--Testimonial One Single-->
                         
                            <!--Testimonial One Single-->
                           

                            <?php if($testimonials): ?>
                            <?php foreach($testimonials as $testimony):?>

                            <div class="testimonial_one_single">
                                <div class="testimonial_one_content">
                                    <div class="testimonial_one_quote">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p> <?php echo $testimony['testimony'] ?></p>
                                    <div class="testi_shape_1"
                                        style="background-image: url(<?php echo base_url() ?>assets/images/shapes/testi_one_shape-1.png)"></div>
                                </div>
                                <div class="testimonials-one__info">
                                    <div class="customer_img">
                                        <img src="<?php echo base_url() ?>assets/images/testimonials/testimonial-one-img-1.png" alt="">
                                    </div>
                                    <div class="customer_info">
                                        <h3><?php echo $testimony['name'] ?> <span>Customer</span> </h3>
                                    </div>
                                </div>
                            </div>
                         

                         <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--CTA One Start-->
        <section class="cta_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta_one_inner wow fadeInUp" data-wow-delay="100ms">
                            <div class="cta_one_left">
                                <h2>Ready to raise funds for for Help?</h2>
                            </div>
                            <div class="cta_one_right">
                                <a href="<?php echo base_url() ?>campaign/create" class="thm-btn">Let’s Make It Happen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog One Start-->
        <section class="blog_one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block_title_icon">
                        <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                    </div>
                    <p>Latest News & Articles</p>
                    <h3>From the Blog</h3>
                </div>
                <div class="row">

                <?php 

                 $delays = 100;
                foreach($feturedpost as $feturedpost_item):?>
                    <div class="col-xl-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="<?php echo $delays ?>ms">
                            <div class="blog_one_image">
                            <img src="<?php echo base_url() ?>assets/uploads/blog/<?php echo $feturedpost_item['post_image'] ?>" alt="">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="news-detail.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="news-detail.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="news-detail.html"><?php echo $feturedpost_item['post_title']; ?></a></h3>
                                </div>
                                <div class="blog_one_text">
                                    <p><?php echo $feturedpost_item['intro_text']; ?></p>
                                </div>
                                <div class="date_btn">
                                    <a href="<?php echo base_url() ?>">02 Jan, 2020</a>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php 

                $delays = ($delays+100);
                endforeach ?>


        
                </div>
            </div>
        </section>


       

