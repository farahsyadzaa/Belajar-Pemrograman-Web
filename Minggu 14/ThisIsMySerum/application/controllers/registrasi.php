<?php

class Registrasi extends CI_Controller{
	
	public function index()
	{
		$this->form_validation->set_rules('nama','Name','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password_1','Password','required|matches[password_2]');
		$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('tanggallahir','Date Of Birth','required');
		$this->form_validation->set_rules('jeniskulit','Skin Type');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('registrasi');
			$this->load->view('templates/footer');
		}else{
			$data = array(
				'id'			=> '',
				'nama'			=> $this->input->post('nama'),
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password_1'),
				'email'			=> $this->input->post('email'),
				'tanggallahir'	=> $this->input->post('tanggallahir'),
				'jeniskulit'	=> $this->input->post('jeniskulit'),
				'role_id'		=> 2,
			);
			
			$this->db->insert('tb_user',$data);
			redirect('auth/login/index');
		}
	}
}
	