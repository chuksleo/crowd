<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Green Lenovo
 */
class Home extends CI_Controller {

    //put your code here
    public function index() {
        $this->load->library('ion_auth');
        $this->load->model('campaign_model');
        $this->load->model('blog_model');
        
        $this->load->model('testimonial_model');
        // if ($this->ion_auth->logged_in()) {
        //     $data['project'] = $this->campaign_model->campaign_model();
        // }
        $data['feturedpost'] = $this->blog_model->get_featured_post();
        $data['categories'] = $this->project_category_model->getCategories($num=10);
        $data['campaigns'] = $this->campaign_model->get_campaigns_limit();
        $data['testimonials'] = $this->testimonial_model->get_front_testimony();
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['page_title'] = "DONOFUND: Africa #1 Fundraising Platform for Crowdfunding ";

        $this->load->view('section/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('section/footer', $data);
    }
    
    

}
