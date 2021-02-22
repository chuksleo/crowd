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





    public function static_languages() {


        $data['langs'] = $this->settings_model->getStaticLang();
    
        $this->load->view("admin/static_lang", $data);
    }



      /**
     * Sets up the CkEditior
     * @param type $path Relative path to the ckeditor files
     * @param type $width Width of the editor o view
     */
    function editor($path, $width) {
        //Loading Library For Ckeditor
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        //configure base path of ckeditor folder 
        $this->ckeditor->basePath = base_url() . 'js/ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = $width;
        //configure ckfinder with ckeditor config 
        $this->ckfinder->SetupCKEditor($this->ckeditor, $path);
        
    }


    public function edit_lang($id) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        
       
        if($this->input->post()){
           
            
            $uid = $this->ion_auth->get_user_id();           
           
            $this->settings_model->updateStaticLang(
                    $this->input->post('field'), 
                    $this->input->post('value'), 
                    $this->input->post('status'), 
                    $id );

            redirect('/admin/static_languages', 'refresh');
        }
        $path = './js/ckfinder';
        $width = '850px';
       
        $data['lang'] = $this->settings_model->getStaticLangById($id);
        // print_r($data['campaign']);
        $this->editor($path, $width);
        $this->load->view("admin/edit_static_lang" , $data);
    }


    public function settings() {


        $data['settings'] = $this->settings_model->get_all_settings();
    
        $this->load->view("admin/settings", $data);
    }

     public function edit_settings() {
            
        $data['settings'] = $this->settings_model->get_all_settings();
        $image = $data['settings']['logo'];
        if($this->input->post()){
           
            
            $uid = $this->ion_auth->get_user_id();
            $config['upload_path'] = './assets/uploads/files/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 20048; // Need to define properly              
            $config['file_name'] = time().$uid;       
            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile1');

            $pic = $this->upload->data();
            if($_FILES['userfile1']['size'] == 0){
                $image = $image;
            }else{
                $image = $pic['file_name'];
            }
            
           
            $this->settings_model->update_settings(
                $this->input->post('site'), 
                $image, 
                $this->input->post('email'), 
                $this->input->post('address'), 
                $this->input->post('phone'), 
                $this->input->post('phone2'), 
                $this->input->post('twitter'), 
                $this->input->post('facebook'), 
                $this->input->post('linkedin'), 
                $this->input->post('webmail') );
            redirect('/admin/settings', 'refresh');
        }
        
        
        $this->load->view("admin/edit_settings", $data);
    }

}
