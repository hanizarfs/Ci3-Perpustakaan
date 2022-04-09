<?php

class collectionModel extends CI_Model {
	function __construct() {
		$this->load->database();
	}

	function get_collections() {
		$query = $this->db->query("SELECT * FROM collections");
		// return $query->row_array();
		return $query->result();
	}

	function get_detail($a) {
		$this->db->where('id', $a);
		return $this->db->get('collections')->row_array();
	}

	function insert($a, $cover) {
        $data = [
            'nama' => $a['nama'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            'kategori' => $a['kategori'],
            'cover' => $cover
        ];
        return $this->db->insert('collections', $data);
    }

	function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('collections');
	}

	function update($a, $id) {
		$data = [
            'nama' => $a['nama'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            'kategori' => $a['kategori'],
		];
		$this->db->where('id', $id);
        return $this->db->update('collections', $data);
	}

	function update_cover($a, $id) {
		$data = [
            'cover' => $a
		];
		$this->db->where('id', $id);
        return $this->db->update('collections', $data);
	}
}
?>
