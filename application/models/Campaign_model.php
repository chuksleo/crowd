<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campaign_model
 *
 * @author Green Lenovo
 */
class Campaign_model extends CI_Model {

    //put your code here
    public $CampaignId; 
    public $image;
    public $Title;
    public $UserId;    
    public $EndDate;
    public $Description;
    public $StatusId;
    public $Amount;
    public $Beneficiary;
    public $Current;
    public $DateCreated;
    public $DateModified;

    
    public function get_all_campaigns(){
         $this->db->select()->from('campaigns AS c');
         $this->db->join('campaign_statuses AS cs', 'cs.CampaignStatusId = c.StatusId');
         $this->db->join('categories AS ca', 'ca.catId = c.CategoryId','left')->group_by('c.CampaignId');
         $query = $this->db->get();
        return $query->result();
    }


    public function getTotalCampaigns(){

       $this->db->select()->from('campaigns');

        $query = $this->db->get();
        return $query->num_rows();

    }


    public function getTotalUserCampaigns($uid){

       $this->db->select()->from('campaigns AS c')->where('c.UserId =',$uid);

        $query = $this->db->get();
        return $query->num_rows();

    }


    



    public function get_campaigns_limit($num=9,$start=0)
        {

                

                $this->db->select()->from('campaigns AS c')->limit($num, $start);
                $this->db->join('users AS u', 'u.id = c.UserId');
                $this->db->join('categories AS ca', 'ca.catId = c.CategoryId','left')->group_by('c.CampaignId');

                $query = $this->db->get();
                return $query->result();
        }



     public function user_campaigns($uid){
         $this->db->select()->from('campaigns AS c')->where('c.UserId =',$uid);
         $this->db->join('campaign_statuses AS cs', 'cs.CampaignStatusId = c.StatusId');
         $this->db->join('categories AS ca', 'ca.catId = c.CategoryId','left')->group_by('c.CampaignId');
         $query = $this->db->get();
        return $query->result();
    }
    
    public function get_campaign_byId($id) {

            $this->db->select()->from('campaigns AS c')->where('c.CampaignId =',$id);
            $this->db->join('users AS u', 'u.id = c.UserId');
            $this->db->join('categories AS ca', 'ca.catId = c.CategoryId','left');
            $query = $this->db->get();
            
            return $query->row();
      
    }
    
    public function get_category_campaigns($catId) {

        $this->db->select()->from('campaigns AS c')->where('c.CategoryId =',$catId)->order_by('c.DateCreated','desc');
        $this->db->join('users AS u', 'u.id = c.UserId');
        $this->db->join('categories AS ca', 'ca.catId = c.CategoryId','left')->group_by('c.CampaignId');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_project_campaigns_current($projectId) {
        $query = $this->db->get_where("campaigns", array("ProjectId" => $projectId));
        return $query->row();
    }


     public function getPercentageRaised ($target, $raised) {


        $val = ($raised/$target);
        $percentage = $val * 100;

        return $percentage;
    }


    public function getDaysLeft($enddate){
        $today = time();        
        $datetime2 = strtotime($enddate);

        $secs = ($datetime2 - $today);
        // $days = $secs / 86400;
        $days = round($secs / (60 * 60 * 24));

        return $days;
    }
    
    public function create_campaign($title, $categoryid, $amount, $endDate, $fullname, $description, $statusId, $uid, $image){  
        $this->Title = $title; 
        $this->CategoryId = $categoryid; 
        $this->image = $image; 
        $this->Amount = $amount;
        $this->EndDate = $endDate; 
        $this->Description = $description;
        $this->StatusId = $statusId;
        $this->UserId = $uid;
        $this->Beneficiary = $fullname;
        $this->Current = 0;
        $this->DateCreated = new DateTime();
        $this->DateModified = new DateTime();
        $this->db->insert('campaigns', $this);
        return $this->db->insert_id();
    }
    
    public function update_campaign($title, $categoryid, $amount, $endDate, $fullname, $description, $statusId, $uid, $image, $cid){
        $this->CampaignId = $cid;
        $this->Title = $title; 
        $this->CategoryId = $categoryid; 
        $this->image = $image; 
        $this->Amount = $amount;
        $this->Beneficiary = $fullname;
        $this->Description = $description;
        $this->StatusId = $statusId;
        $this->DateModified = new DateTime();
        return $this->db->update("campaigns", $this, array("CampaignId" => $this->CampaignId));
    }

}
