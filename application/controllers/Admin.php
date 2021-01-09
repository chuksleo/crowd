<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Green Lenovo
 */
class Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->model('donation_model');
         $this->load->model('campaign_model');

        if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
            $data['is_loggedin'] = $this->ion_auth->logged_in();
            $data['message'] = !$this->ion_auth->is_admin() ? "You must be an administrator to access dashboard":  "You must be logged in";
            !$this->ion_auth->is_admin() ? $this->load->view('Home/index', $data) : $this->load->view("auth/login", $data);
        }
    }

    public function index() {


        $data['total_donations'] = $this->donation_model->getTotalDonations();
        $funds= $this->donation_model->getTotalDonationAmounts();

       $amount = 0;
       foreach($funds as $fund){
            $amount = ($amount + $fund->amount);
       }
       //   $data['total_members'] = $this->ion_auth->logged_in();
        $data['total_campaigns'] = $this->campaign_model->getTotalCampaigns();
        $data['total_raised'] = $amount;


       
        $this->load->view("section/admin/header");
        $this->load->view("admin/index", $data);
        $this->load->view("section/admin/footer");
    }

}
