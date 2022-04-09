<?php

class Usermodel extends CI_Model {
	function __construct() {
		$this->load->database();
	}

	function get_user() {
		$query = $this->db->query("SELECT * FROM users");
		// return $query->row_array();
		return $query->result();
	}

	// function user_juga() {
	// 	return $this->db->get('users')->result_array();
	// }

	function get_detail($a) {
		$this->db->where('id', $a);
		return $this->db->get('users')->row_array();
	}

	function insert($a) {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon']
        ];
        return $this->db->insert('users', $data);
    }

	function update($a, $id) {
		$data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon']
        ];
		$this->db->where('id', $id);
        return $this->db->update('users', $data);
	}
	
	function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('users');
	}

	function auth ($email, $pwd) {
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
		if($this->db->get('users')->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function get_detaill($email) {
		$this->db->where('email', $email);
		return $this->db->get('users')->row_array();
	}

	function update_cookie($cookie, $email) {
		$data = [
			'cookie' => $cookie
		];
		$this->db->where('email', $email);
        return $this->db->update('users', $data);
	}

	// function get_detail_by_cookie($cookie) {
	// 	$data = [
	// 		'cookie' => $cookie
	// 	];
	// 	$this->db->where('cookie', $cookie);
    //     return $this->db->update('users', $data);
	// }
}
?>
