<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	public function index() {
		$data['hobi']=['membaca', 'menulis', 'menabung'];
		$this->load->view('dashboard', $data);
		// $this->load->view('dashboard');
	}
}
