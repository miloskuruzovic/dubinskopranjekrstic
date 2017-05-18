<?php

/**
* 
*/
class Dubinsko_usluge_model extends CI_model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_usluge($usluga_id = NULL)
	{
		$this->db->select('*');
		$this->db->from('usluge');
		($usluga_id === NULL)?"":$this->db->where('usluga_id', $usluga_id);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function update_cene()
	{
		$this->db->set('cena', $this->input->post('cena'));
		$this->db->where('usluga_id', $this->input->post('usluga_id'));
		$this->db->update('usluge');

		return "Success";
	}
}