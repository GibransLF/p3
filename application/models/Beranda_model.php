<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_model extends CI_Model {

	public function get_user()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('matkul','user.matkul_id = matkul.id');

		//mengurutkan dari a ke z menggunakan order by
		$this->db->order_by('nama', 'asc');

		return $this->db->get();
	}
	
    public function create($data){
        $this->db->insert('user',$data);
    }

	public function get_user_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$id);

		return $this->db->get()->row_array();
	}
	public function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
	}
}
