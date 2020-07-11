<?php

class Model_serum extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_serum');
	}
	
	public function tambah_serum($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function edit_serum($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function detail_srm($id_srm)
	{
		$result = $this->db->where('id_srm',$id_srm)->get('tb_serum');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}
?>