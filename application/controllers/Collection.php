<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('collectionModel');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url'));
	}

	public function index() {
		$data['list']=$this->collectionModel->get_collections();
		// print_r($data['list']);
		$this->load->view('collection/collection', $data);
	}

	public function detail($a = null) {
		$data['detail'] = $this->collectionModel->get_detail($a);
		$this->load->view('collection/detailCollection', $data);
	}

	public function add() {
		$this->load->view('collection/add');
	}

	public function insert() {
		$dname = explode(".", $_FILES['cover']['name']);
		$ext = end($dname);
		$cover = $_FILES['cover']['name'] = strtolower(date('YmdHis').'.'.$ext);
        // $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/img/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "204800000000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->collectionModel->insert($this->input->post(), "assets/img/".$cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('collection'));
        }
    }

	public function edit($a) {
		$data['detail'] = $this->collectionModel->get_detail($a);
		$this->load->view('collection/edit', $data);
	}

	public function update($id) {
		$cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/img/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            // 'max_size' => "204800000000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
			$this->collectionModel->update_cover("assets/img/".$cover, $id);
		};
        if ($this->collectionModel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('collection'));
        }
	}

	public function delete($id) {
		if($this->collectionModel->delete($id)) {
			$this->session->set_flashdata('pesan', 'Data berhasil di hapus');
			redirect(base_url('collection'));
		}
	}
}
