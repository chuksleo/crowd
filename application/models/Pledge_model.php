<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pledge_model
 *
 * @author Green Lenovo
 */
class Pledge_model extends CI_Model{
    //put your code here
    public $Id;
    public $CampaignId;
    public $FunderId;
    public $Amount;
    public $Paid;
    public $DateCreated;
    public $DateModified;
    
    public function get_pledge($id) {
        $query = $this->db->get_where('pledges', array('Id'=>$id));
        return $query->row();
    }
    
    public function get_pledges() {
        $query = $this->db->get('funders');
        return $query->result();
    }
    
    public function get_pledges_funder($id){
        $query = $this->db->get_where('pledges', array('FunderId'=>$id));
        return $query->result();
    }
    
    public function get_pledges_campaign($id) {
        $query = $this->db->get_where('funders', array('CampaignId'=>$id));
        return $query->result();
    }
    
    public function get_pledges_project($id) {
        $this->db->select('CampaignId');
        $query = $this->db->get('campaigns', array('ProjectId'=>$id));
        $campaignIds = $query->result_array();
        $query = $this->db->select('*')->where_in('CampaignId', $campaignIds)->get('pledges');
        return $query->result();        
    }
    
    public function create_pledge($campaign, $funder, $amount){
        $this->Paid = FALSE;
        $this->FunderId = $funder;
        $this->CampaignId = $campaign;
        $this->Amount = $amount;
        $this->DateCreated = new DateTime();
        $this->DateModified = new DateTime();
        
        $this->db->insert('pledges', $this);
        
        return $this->db->insert_id();
    }
}
