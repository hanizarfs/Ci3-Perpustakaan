<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->helper(array('text', 'url'));
		
	}

	public function index() {
		$data['list']=$this->usermodel->get_user();
		// print_r($data['list']);
		$this->load->view('user/user', $data);
	}

	public function detail($a) {
		$data['detail'] = $this->usermodel->get_detail($a);
		$this->load->view('user/detailUser', $data);
	}

	public function add() {
		$this->load->view('user/add');
	}

	public function insert() {
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');  
		$password = $this->input->post('password');  
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');  

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'alamat' => $alamat,
			'telepon' => $telepon
		);
		$this->usermodel->insert($data, 'users');
		redirect(base_url('user'));
	}
	
	public function edit($a) {
		$data['detail'] = $this->usermodel->get_detail($a);
		$this->load->view('user/edit', $data);
	}

	public function update($id) {
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');  
		$password = $this->input->post('password');  
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');  

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'alamat' => $alamat,
			'telepon' => $telepon
		);
		$this->usermodel->update($data,$id);
		redirect(base_url('user'));
	}

	public function delete($id) {
		$this->usermodel->delete($id);
		redirect(base_url('user'));
	}
}
