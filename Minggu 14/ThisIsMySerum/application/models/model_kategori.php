<?php

class Model_kategori extends CI_Model{
	public function data_dry_skin(){
		return $this->db->get_where("tb_serum",array('kategori' => 'dry skin'));
	}
	
	public function data_oily_skin(){
		return $this->db->get_where("tb_serum",array('kategori' => 'oily skin'));
	}
	
	public function data_combination_skin(){
		return $this->db->get_where("tb_serum",array('kategori' => 'combination skin'));
	}
}