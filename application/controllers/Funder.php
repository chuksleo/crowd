<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funders
 *
 * @author Green Lenovo
 */
class Funder extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model("funder_model");
        $this->load->model("campaign_model");
    }
    
    /**
     * Sets up the CkEditior
     * @param type $path Relative path to the ckeditor files
     * @param type $width Width of the editor o view
     */
    function editor($path, $width) {
        //Loading Library For Ckeditor
        $this->load->library('ckeditor');
        $this->load->library('ckFinder');
        //configure base path of ckeditor folder 
        $this->ckeditor->basePath = base_url() . 'js/ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = $width;
        //configure ckfinder with ckeditor config 
        $this->ckfinder->SetupCKEditor($this->ckeditor, $path);
    }
    
    public function index() {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $this->load->view('funder/index', $data);
    }
    
    public function details() {
        $funder = $this->funder_model->get_funder_user($this->ion_auth->user()->row()->id);
        if($funder != NULL){
         $data['pledges'] = $this->pledge_model->get_pledges_funder($funder->Id);
        $this->load->view('funder/details', $data);
        } else{
            redirect();
        }
    }
    
    public function pledge(){
        //print_r($this->input->post());
        //die();
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $funder = $this->funder_model->get_funder_user($this->ion_auth->user()->row()->id);
        //print_r($funder);
        //die();
        $campaign = $this->campaign_model->get_project_campaigns_current($this->input->post('projectId'));
        //print_r($campaign);
        $this->pledge_model->create_pledge($campaign->CampaignId, $funder->Id, $this->input->post('amount'));
        //print_r($funder);
        $data['pledges'] = $this->pledge_model->get_pledges_funder($funder->Id);
        $this->load->view('funder/details', $data);
    }
    
    public function create() {
        $data['is_loggedin'] = $this->ion_auth->logged_in();

        // $path = '/YouthFund/js/ckfinder';
        // $width = '850px';
        // $this->editor($path, $width);
        //Setting validation rules
        $config = array(
            array(
                'field' => 'id_number',
                'label' => 'ID Number/Business Reg. No.',
                'rules' => 'required|is_unique[funders.Id_Number]|max_length[30]|min_length[5]|numeric',
                array(
                    'required' => 'You hav not entered %s',
                    'is_unique' => 'This %s already exists'
                )
            ),
            array(
                'field' => 'description',
                'label' => 'About',
                'rules' => 'required|min_length[1]|max_length[10000]'
            ),
            array(
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'required|min_length[5]|max_length[100]'
            ),
            array(
                'field' => 'userId',                
                'rules' => 'required'
            ),
            
        );
        $this->form_validation->set_rules($config);
        $data['create_form'] = $config;
        $data['user'] = $this->ion_auth->user()->row();
        if ($this->input->post() != NULL && $this->form_validation->run()) {

//            print_r($this->input->post());
//            print_r($_FILES);
//            die();
            
            //Image upload
            $config['upload_path'] = './uploads/Projects/Profile/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4';
            $config['max_size'] = 20048; // Need to define properly           
            $this->load->library('upload', $config);
            // if
            $this->upload->do_upload('Profile_Picture');
            $pic = $this->upload->data();
            //if
            //$this->upload->do_upload('Profile_Video');
            //$vid = $this->upload->data();
            print_r($this->upload->display_errors());
            echo $this->funder_model->create_funder($this->input->post('userId'),$this->input->post('id_number'), $this->input->post('address'), $this->input->post('description'),  $this->input->post('address'), $pic['file_name']);
            // Adding user to Projects group.
            $this->ion_auth->add_to_group(4, $this->input->post('userId'));
            //$this->load->view("");
            redirect('Funder/details');
        } else {
            $this->load->view("funder/create", $data);
        }
    }
}
