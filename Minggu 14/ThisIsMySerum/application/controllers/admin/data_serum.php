<?php

class Data_serum extends CI_Controller{
	
	public function __construct(){
	parent::__construct();
		
		if($this->session->userdata('role_id') != '1'
			){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			}
	}
	
	public function index()
	{
		$data['serum'] = $this->model_serum->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/banner');
		$this->load->view('admin/data_serum', $data);
		$this->load->view('templates_admin/footer');
	}
	
	public function tambah_aksi()
	{
		$nama_srm		= $this->input->post('nama_srm');
		$merk_srm		= $this->input->post('merk_srm');
		$keterangan		= $this->input->post('keterangan');
		$kategori		= $this->input->post('kategori');
		$nama_srm		= $this->input->post('nama_srm');
		$gambar			= $_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path'] = './assets/images';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal diUpload!!";
			}else {
				$gambar=$this->upload->data('file_name');
			}
		}
		$data = array (
			'nama_srm'	=> $nama_srm,
			'merk_srm'	=> $merk_srm,
			'keterangan'=> $keterangan,
			'kategori'	=> $kategori,
			'gambar'	=> $gambar
		);
		
		$this->model_serum->tambah_serum($data, 'tb_serum');
		redirect('admin/data_serum');
	}
	
	public function edit($id)
	{
		$where = array('id_srm' =>$id);
		$data['serum'] = $this->model_serum->edit_serum($where, 'tb_serum')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/banner');
		$this->load->view('admin/edit_serum', $data);
		$this->load->view('templates_admin/footer');
	}
	
	public function update(){
		$id_srm		= $this->input->post('id_srm');
		$nama_srm	= $this->input->post('nama_srm');
		$merk_srm	= $this->input->post('merk_srm');
		$keterangan	= $this->input->post('keterangan');
		$kategori	= $this->input->post('kategori');
		
		$data = array(
		
			'nama_srm'	=> $nama_srm,
			'merk_srm'	=> $merk_srm,
			'keterangan'=> $keterangan,
			'kategori'	=> $kategori,
		);
		
		$where = array('id_srm' => $id);
		
		$this->model_serum->update_data($where,$data,'tb_serum');
		redirect('admin/data_serum');
	}
	
	public function hapus($id)
	{
		$where = array('id_srm' => $id);
		$this->model_serum->hapus_data($where, 'tb_serum');
		redirect('admin/data_serum');
	}
}