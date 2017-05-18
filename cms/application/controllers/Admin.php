<?php


class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('dubinsko_akcije_model');
		$this->load->model('dubinsko_naslov_model');
		$this->load->model('dubinsko_kategorije_model');
		$this->load->model('dubinsko_usluge_model');
		$this->load->model('dubinsko_admin_model');

		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		session_start();
		ob_start();
	}

	public function index()
	{
		$data['title'] = "Dubinsko pranje Krstić - Administracija";
		$data['akcije'] = $this->dubinsko_akcije_model->get_akcije();
		$data['naslov'] = $this->dubinsko_naslov_model->get_naslov()[0];

		$this->load->view('templates/header', $data);
		(isset($_SESSION['admin_id']))?
		$this->load->view('default/index', $data):
		$this->load->view('default/login');
		$this->load->view('templates/footer');
	}

	public function akcije_update()
	{
		$this->dubinsko_akcije_model->update_akcije();
		redirect(base_url());
	}

	public function naslov_update()
	{
		$this->dubinsko_naslov_model->update_naslov();
		redirect(base_url());
	}

	public function cenovnik($usluga_id = NULL)
	{
		$data['title'] = "Dubinsko pranje Krstić - Cenovnik";
		$data['kategorije'] = $this->dubinsko_kategorije_model->get_kategorije();
		$data['usluge'] = $this->dubinsko_usluge_model->get_usluge();
		$data['selected_usluga'] = ($usluga_id == NULL)?NULL:$this->dubinsko_usluge_model->get_usluge($usluga_id);

		$this->load->view('templates/header', $data);
		(isset($_SESSION['admin_id']))?
		$this->load->view('default/cenovnik', $data):
		$this->load->view('default/login');
		$this->load->view('templates/footer');
	}

	public function cenovnik_update()
	{
		$this->dubinsko_usluge_model->update_cene();
		redirect(base_url()."/cenovnik");
	}

	public function login()
	{
		$this->dubinsko_admin_model->login();
		redirect(base_url());
	}

	public function logout()
 	{
 		session_start();
		session_destroy();

		redirect(base_url());
 	}
}