<?php

class peminjamanModel extends CI_Model {
	function __construct() {
		$this->load->database();
	}

	function get_data_peminjaman() {
		$query = $this->db->query("SELECT * FROM peminjamans");
		// return $query->row_array();
		return $query->result();
	}

	function get_detail($a) {
		$this->db->where('id', $a);
		return $this->db->get('peminjamans')->row_array();
	}

	function get_nama(){
		$query = $this->db->query('SELECT nama FROM users');
		return $query->result();
	}

	function get_nama_buku() {
		$query = $this->db->query('SELECT nama FROM collections');
		return $query->result();
	}

	function insert($a) {
        $data = [
			'tgl_peminjaman' => $a['tgl_peminjaman'],
            'nama' => $a['nama'],
            'buku_yang_di_pinjam' => $a['nama-buku'],
            'tgl_pengembalian' => $a['tgl_pengembalian'],
            'keterangan' => $a['keterangan'],
        ];
        return $this->db->insert('peminjamans', $data);
    }

	function update($a, $id) {
		$data = [
			'tgl_peminjaman' => $a['tgl_peminjaman'],
            'nama' => $a['nama'],
            'buku_yang_di_pinjam' => $a['nama-buku'],
            'tgl_pengembalian' => $a['tgl_pengembalian'],
            'keterangan' => $a['keterangan'],
        ];
		$this->db->where('id', $id);
        return $this->db->update('peminjamans', $data);
	}

	function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('peminjamans');
	}
}
