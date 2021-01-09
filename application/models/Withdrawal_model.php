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
class Withdrawal_model extends CI_Model {

    //put your code here
    public $campaign_id; 
    public $amount;
    public $userid;    
    public $method;
    public $status;
    public $date;
   

    public function get_all_withdrawals(){
        $query = $this->db->get("withdrawals");
        return $query->result();
    }


    public function get_userWithdrawals($uid){
         $query = $this->db->get_where("withdrawals", array("userid" => $uid));
        return $query->result();
    }


    
    public function create_withrawal($campaigID, $amount, $uid, $payMethod, $status){  
        $this->campaign_id = $campaigID; 
        $this->amount = $amount; 
        $this->userid = $uid;
        $this->method = $payMethod; 
        $this->status = $status;
        $this->date = new DateTime();;
        
        $this->db->insert('withdrawals', $this);
        return $this->db->insert_id();
    }
    
  

}
