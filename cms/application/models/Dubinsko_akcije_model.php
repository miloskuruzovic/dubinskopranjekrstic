<?php

/**
* 
*/
class Dubinsko_akcije_model extends CI_model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_akcije()
	{
		$this->db->select('*');
		$this->db->from('akcije');

		$query = $this->db->get();

		return $query->result_array();
	}

	public function update_akcije()
	{
		$usluge = $this->input->post('usluge');	
		$cene = $this->input->post('cene');

		foreach ($usluge as $key => $value) {
			$this->db->set('sadrzaj', $value);
			$this->db->where('akcija_id', ($key +1) );
			$this->db->update('akcije');
		}

		foreach ($cene as $key => $value) {
			$this->db->set('cena', $value);
			$this->db->where('akcija_id', ($key +1) );
			$this->db->update('akcije');
		}

		return "Success";
	}
}