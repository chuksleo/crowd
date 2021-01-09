<?php
class Settings_model extends CI_Model {
	public  function __construct()
	{

	}









	public function get_all_settings()
	{


				$this->db->select()->from('settings AS st');

				$query = $this->db->get();
				return $query->result_array();

	}





}



?>
