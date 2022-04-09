<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('peminjamanModel');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url'));
	}

	public function index() {
		$data['list']=$this->peminjamanModel->get_data_peminjaman();
		// print_r($data['list']);
		$this->load->view('peminjaman/peminjaman', $data);
	}
	
	public function detail($a = null) {
		$data['detail'] = $this->peminjamanModel->get_detail($a);
		$this->load->view('peminjaman/detail', $data);
	}

	public function add() {
        $data['nama'] = $this->peminjamanModel->get_nama();
		$data['namaBuku'] = $this->peminjamanModel->get_nama_buku();
		$this->load->view('peminjaman/add', $data);
    }

	public function insert() {
		$tgl_peminjaman = $this->input->post('tgl_peminjaman');  
		$nama = $this->input->post('nama');
		$namaBuku = $this->input->post('nama-buku');  
		$tgl_pengembalian = $this->input->post('tgl_pengembalian');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'tgl_peminjaman' => $tgl_peminjaman,
			'nama' => $nama,
			'nama-buku' => $namaBuku,
			'tgl_pengembalian' => $tgl_pengembalian,
			'tgl_pengembalian' => $tgl_pengembalian,
			'keterangan' => $keterangan,
		);
		$this->peminjamanModel->insert($data, 'peminjamans');
		redirect(base_url('peminjaman'));
	}

	public function edit($a) {
		$data['nama'] = $this->peminjamanModel->get_nama();
		$data['namaBuku'] = $this->peminjamanModel->get_nama_buku();
		$data['detail'] = $this->peminjamanModel->get_detail($a);
		$this->load->view('peminjaman/edit', $data);
	}

	public function update($id) {
		$tgl_peminjaman = $this->input->post('tgl_peminjaman');  
		$nama = $this->input->post('nama');
		$namaBuku = $this->input->post('nama-buku');  
		$tgl_pengembalian = $this->input->post('tgl_pengembalian');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'tgl_peminjaman' => $tgl_peminjaman,
			'nama' => $nama,
			'nama-buku' => $namaBuku,
			'tgl_pengembalian' => $tgl_pengembalian,
			'keterangan' => $keterangan,
		);
		$this->peminjamanModel->update($data, $id);
		redirect(base_url('peminjaman'));
	}

	public function delete($id) {
		$this->peminjamanModel->delete($id);
		redirect(base_url('peminjaman'));
	}

}
