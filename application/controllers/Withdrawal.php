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
class Withdrawal extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model("withdrawal_model");
    }
    
    public function index () {
        
       

        if($this->ion_auth->logged_in() == true){
            $data['is_loggedin'] = $this->ion_auth->logged_in();
            $uid = $this->ion_auth->get_user_id();
            $data['withdrawals'] = $this->withdrawal_model->get_userWithdrawals($uid);
            $this->load->view("withdrawal/index" , $data);


        }else{

            redirect('/', 'refresh');
        }
       
    }



    public function all () {
        $data['is_loggedin'] = $this->ion_auth->logged_in();       
        $data['withdrawals'] = $this->withdrawal_model->get_all_withdrawals();
        $this->load->view("withdrawal/index" , $data);
    }



    public function view ($campaignid) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();       
        $data['campaign'] = $this->campaign_model->get_campaign_byId($campaignid);
        $this->load->view("campaign/view" , $data);
    }

    
    public function create () {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['action'] = "create";
        if($this->input->post()){
           
            $EndDate = new DateTime($this->input->post("EndDate"));
            $uid = $this->ion_auth->get_user_id();
            
            $campaignId = $this->campaign_model->create_campaign($this->input->post('title'), $this->input->post('Category'), $this->input->post('Amount'), $EndDate, $this->input->post('description'), 1, $uid );
            redirect('/campaign/index', 'refresh');
        }
        $path = './js/ckfinder';
        $width = '850px';
        $data['categories'] = $this->project_category_model->getCategories();
        $this->editor($path, $width);
        $this->load->view("campaign/create" , $data);
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
            
            $campaignId = $this->campaign_model->update_campaign($this->input->post('title'), $this->input->post('Category'), $this->input->post('Amount'), $this->input->post('description'), 1, $id );
            // redirect('/campaign/index', 'refresh');
        }
        $path = './js/ckfinder';
        $width = '850px';
        $data['categories'] = $this->project_category_model->getCategories();
        $data['campaign'] = $this->campaign_model->get_campaign_byId($id);
        $this->editor($path, $width);
        $this->load->view("campaign/edit" , $data);
    }
     

}
