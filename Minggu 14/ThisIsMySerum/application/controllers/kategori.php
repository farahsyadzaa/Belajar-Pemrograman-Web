<?php

class Kategori extends CI_Controller{
	public function dry_skin()
	{
		$data['dry_skin'] = $this->model_kategori->data_dry_skin()->result();
		$this->load->view('templates/header');
		$this->load->view('dry_skin', $data);
		$this->load->view('templates/footer');
	}
	
	public function oily_skin()
	{
		$data['oily_skin'] = $this->model_kategori->data_oily_skin()->result();
		$this->load->view('templates/header');
		$this->load->view('oily_skin', $data);
		$this->load->view('templates/footer');
	}
	
	public function combination_skin()
	{
		$data['combination_skin'] = $this->model_kategori->data_combination_skin()->result();
		$this->load->view('templates/header');
		$this->load->view('combination_skin', $data);
		$this->load->view('templates/footer');
	}
}