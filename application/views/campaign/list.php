

<?php
//Loading header
$data['title'] = 'Login';
$data['javascript'] = 'app.js';
$data['page_title'] = "DONOFUND: $cat_title Fundraising - Start Fundraiser ";
$this->load->view('section/header', $data);


?>

<section class="page-header" style="background-image: url(<?php echo base_url() ?>assets/images/resources/help.jpg);">
            <div class="container">
                <h2><?php echo $cat_title ?> Campaigns</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><span>Category</span></li>
                     <li><span><?php echo $cat_title ?></span></li>
                </ul>
            </div>
        </section>




       <!--Explore Projects One Start-->
       <section class="explorep_projects_one projects_two">
            <div class="container">
                <div class="row">
       			


       					 <?php foreach($campaigns as $campaign): 

                      $percentage = $this->campaign_model->getPercentageRaised($campaign->Amount, $campaign->Current);
                      $daysleft = $this->campaign_model->getDaysLeft($campaign->EndDate);
                      $link_text = $this->campaign_model->cleanTitle($campaign->Title);

                         ?>

 <div class="col-xl-4 col-lg-6">
                        <div class="projects_one_single projects_two_single">
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
                                        <div class="inner count-box counted">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000" data-stop="<?php echo $percentage ?>"><?php echo $percentage ?></span>
                                                        <span class="percent">%</span>
                                                    </div>
                                                    <div class="bar-fill" data-percent="<?php echo $percentage ?>" style="width: <?php echo $percentage ?>%;"></div>
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
                                        <div class="left_text"><p><?php echo $campaign->title ?></p></div>
                                    </div>
                                    <div class="projects_categories_right">
                                        <div class="right_icon">
                                            <img src="assets/images/project/flag.png" alt="">
                                        </div>
                                        <div class="right_text"><p>United Kingdom</p></div>
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
                    </div>
                       <?php endforeach ?>
  
                </div>
            </div>
        </section>

        <!--Cta Three Start-->
        <section class="cta_one cta_three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta_one_inner cta_three_inner wow fadeInUp animated animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="cta_one_left">
                                <h2>Ready to raise funds for Help?</h2>
                            </div>
                            <div class="cta_one_right">
                                <a href="<?php echo base_url() ?>campaign/create" class="thm-btn">Let’s Make It Happen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php

$this->load->view('section/footer', $data);
?>