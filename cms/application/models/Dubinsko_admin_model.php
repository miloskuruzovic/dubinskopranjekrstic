<?php

/**
* 
*/
class Dubinsko_admin_model extends CI_model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function login()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));

		$query = $this->db->get();

		$admin = $query->result_array()[0];

		var_dump($admin);

		if (isset($admin)) 
		{
			session_start();

			$_SESSION['admin_id'] = $admin['admin_id'];
			$_SESSION['username'] = $admin['username'];
			$_SESSION['status'] = $admin['status'];
			$_SESSION['msg'] = '<a href='.base_url().'admin/logout>Izloguj se</a>';
		}
		else
		{
			session_start();

			$_SESSION['msg'] = "Ulogujte se";
		}

		return $_SESSION['msg'];
	}
}