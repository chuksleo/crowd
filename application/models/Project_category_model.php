<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Projects Category Model
 *
 * @author Chukwuka Chime
 */
class Project_category_model extends CI_Model {
    //put your code here
    public $catId;
    public $title;
    public $icon;
    public $status;
    
    /**
     * Gets all project categories in db 
     * @return type
     */
    public function getCategories($num=FALSE) {

        $this->db->select()->from('categories AS c')->limit($num);
        $query = $this->db->get();
        return $query->result();
    }


    public function get_category_byId($id) {

            $this->db->select()->from('categories AS c')->where('c.catId =',$id);           
            $query = $this->db->get();
            
            return $query->row();
      
    }



    public function create_category($title, $status, $icon){  
        $this->title = $title; 
        $this->status = $status; 
        $this->icon = $icon;        
        $this->db->insert('categories', $this);
        return $this->db->insert_id();
    }


    
    public function update_category($title, $status, $icon, $catId){

         $data = array(

                'title' => $title,
                'status' =>$status,                
                'icon' => $icon,              

            );

            $where = "catId = ".$catId."";

            return $this->db->update('categories', $data, $where);
       
    }



    public function delete_category($catId){
            $this->db->where('catId', $catId);
            return $this->db->delete('categories');

    }


}