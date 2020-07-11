<?php

class Dashboard extends CI_Controller{
	
	public function __construct(){
	parent::__construct();
		
		if($this->session->userdata('role_id') != '2'
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
	

	public function detail($id_srm)
	{
		$data['serum'] = $this->model_serum->detail_srm($id_srm);
		$this->load->view('templates/header');
		$this->load->view('detail_serum', $data);
		$this->load->view('templates/footer');
	}
}