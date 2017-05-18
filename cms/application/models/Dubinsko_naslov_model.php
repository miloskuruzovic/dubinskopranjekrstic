<?php

/**
* 
*/
class Dubinsko_naslov_model extends CI_model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_naslov()
	{
		$this->db->select('*');
		$this->db->from('naslov_akcije');

		$query = $this->db->get();

		return $query->result_array();
	}

	public function update_naslov()
	{
		$naslov = $this->input->post('naslov');

		$this->db->set('naslov', $naslov);
		$this->db->where('id_akcija_naslov', 1);
		$this->db->update('naslov_akcije');

		return TRUE;
	}
}