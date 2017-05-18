<?php

/**
* 
*/
class Dubinsko_kategorije_model extends CI_model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_kategorije()
	{
		$this->db->select('*');
		$this->db->from('kategorije');

		$query = $this->db->get();

		return $query->result_array();
	}
}