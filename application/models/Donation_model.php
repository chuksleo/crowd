<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of donation_model
 *
 * @author CHUKWUKA CHIME
 */
class Donation_model extends CI_Model {

    //put your code here
        public $uid; 
        public $full_name; 
        public $campaign_id;
        public $email; 
        public $amount;
        public $country;
        public $payment_gateway;
        public $reference;
        public $Ananymous;
        public $comment;
        public $datecreated;

    
    public function get_all_donation(){
        $query = $this->db->get("donations");
        return $query->result();
    }

    
    public function getTotalDonations(){

        $query = $this->db->get("donations");
        return $query->num_rows();

    }


    public function getTotalUserDonations($uid){

       $this->db->select()->from('donations AS d')->where('d.uid =',$uid);

        $query = $this->db->get();
        return $query->num_rows();

    }

    public function getTotalUserDonationAmounts($uid){

       $this->db->select('amount')->from('donations AS d')->where('d.uid =',$uid);

        $query = $this->db->get();
        return $query->result();

    }

    public function getTotalDonationAmounts(){

       $this->db->select('amount')->from('donations');

        $query = $this->db->get();
        return $query->result();

    }


    public function user_donations($uid){
        $query = $this->db->get_where("donations", array("uid" => $uid));
        return $query->result();
    }
    
    public function get_donations_byId($id) {
        
            $query = $this->db->get_where("donations", array("id" => $id));
            return $query->row();
      
    }


    public function get_donations_count_bycampaignId($cid) {
        
            $query = $this->db->get_where("donations", array("campaign_id" => $cid));
            return $query->num_rows();
      
    }
    
    
    public function set_donation($uid, $name, $campaignid, $email, $amount, $country, $refcode, $paymentgatway, $ananymous, $comment){  
        $this->uid = $uid; 
        $this->full_name = $name; 
        $this->campaign_id = $campaignid;
        $this->email = $email; 
        $this->amount = $amount;
        $this->country = $country;
        $this->reference = $refcode;
        $this->payment_gateway = $paymentgatway;
        $this->Ananymous = $ananymous;
        $this->comment = $comment;
        $this->datecreated = new DateTime();
       
        $this->db->insert('donations', $this);
        return $this->db->insert_id();
    }
    
    

}
