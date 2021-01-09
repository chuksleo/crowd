<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Campaign
 *
 * @author Green Lenovo
 */
class Campaign extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model("campaign_model");
        $this->load->model('project_category_model');
        $this->load->model('report_campaign_model');
        $this->load->model('donation_model');
        
    }
    
    public function index () {
        
       

        if($this->ion_auth->logged_in() == true){
            $data['is_loggedin'] = $this->ion_auth->logged_in();
            $uid = $this->ion_auth->get_user_id();
            $data['campaigns'] = $this->campaign_model->user_campaigns($uid);
            $this->load->view("campaign/index" , $data);


        }else{

            redirect('/', 'refresh');
        }
       
    }




    public function all () {
        $data['is_loggedin'] = $this->ion_auth->logged_in();       
        $data['campaigns'] = $this->campaign_model->get_all_campaigns();
        $this->load->view("campaign/index" , $data);
    }



    public function category ($title, $catid) {
        $data['categories'] = $this->project_category_model->getCategories();
        $data['cat_title'] = $title;  
        $data['is_loggedin'] = $this->ion_auth->logged_in();       
        $data['campaigns'] = $this->campaign_model->get_category_campaigns($catid);
        
        $this->load->view("campaign/list" , $data);
    }



   

    public function view ($title, $campaignid) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();  
        $data['categories'] = $this->project_category_model->getCategories();     
        $data['campaign'] = $this->campaign_model->get_campaign_byId($campaignid);
        $donors = $this->donation_model->get_donations_count_bycampaignId($campaignid);
        if($donors == null){
            $donors = 0;
        }
        $data['donors'] = $donors;
        $data['percentage'] = $this->campaign_model->getPercentageRaised($data['campaign']->Amount, $data['campaign']->Current);
        
        $this->load->view("campaign/view" , $data);
    }







    public function getFormatedDate ($mydate) {

            $newdate = DateTime::createFromFormat('d/m/Y', $mydate);
            $formatedDate = $newdate->format('Y-m-d H:i:s');
            
        return $formatedDate;

    }
    
    public function create () {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['action'] = "create";
        if($this->ion_auth->logged_in()){
             if($this->input->post()){
            $uid = $this->ion_auth->get_user_id();
            $config['upload_path'] = './uploads/campaign/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
            $config['max_size'] = 20048; // Need to define properly              
            $config['file_name'] = time().$uid;       
            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile1');
            $pic = $this->upload->data();
           
            $EndDate = $this->getFormatedDate($this->input->post("EndDate"));
            
            $this->campaign_model->create_campaign($this->input->post('title'), $this->input->post('Category'), $this->input->post('Amount'), $EndDate, $this->input->post('FullName'), $this->input->post('description'), 1, $uid, $pic['file_name'] );
            redirect('/campaign', 'refresh');
        }
        $path = './js/ckfinder';
        $width = '850px';
        $data['categories'] = $this->project_category_model->getCategories();
        $this->editor($path, $width);
        $this->load->view("campaign/create" , $data);

        }else{
            redirect('/auth/login', 'refresh');
        }
       
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





    public function edit($id) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['action'] = "edit";
       
        if($this->input->post()){
           
            
            $uid = $this->ion_auth->get_user_id();
            $config['upload_path'] = './uploads/campaign/profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
            $config['max_size'] = 20048; // Need to define properly              
            $config['file_name'] = time().$uid;       
            $this->load->library('upload', $config);
            $this->upload->do_upload('userfile1');
            $pic = $this->upload->data();
            $EndDate = $this->getFormatedDate($this->input->post("EndDate"));
            $campaignId = $this->campaign_model->update_campaign($this->input->post('title'), $this->input->post('Category'), $this->input->post('Amount'), $EndDate, $this->input->post('FullName'), $this->input->post('description'), 1, $uid, $id );
            redirect('/campaign', 'refresh');
        }
        $path = './js/ckfinder';
        $width = '850px';
        $data['categories'] = $this->project_category_model->getCategories();
        $data['campaign'] = $this->campaign_model->get_campaign_byId($id);
        // print_r($data['campaign']);
        $this->editor($path, $width);
        $this->load->view("campaign/edit" , $data);
    }





    public function reported_campaign () {
        
       

        if($this->ion_auth->logged_in() == true){
            $data['is_loggedin'] = $this->ion_auth->logged_in();
            $uid = $this->ion_auth->get_user_id();
            $data['reports'] = $this->report_campaign_model->get_all_reported();
            $this->load->view("campaign/report_list" , $data);


        }else{

            redirect('/', 'refresh');
        }
       
    }


    public function createreport ($id) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['action'] = "create";
        if($this->input->post()){          
           
            $reportId = $this->report_campaign_model->create_campaign_report($id, $this->input->post('comment') );
            redirect('/campaign/index', 'refresh');
        }
        $path = './js/ckfinder';
        $width = '850px';
        $data['categories'] = $this->project_category_model->getCategories();
        $this->editor($path, $width);
        $this->load->view("campaign/report_campaign" , $data);
    }
     

}
