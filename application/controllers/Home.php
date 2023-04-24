<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("clientes_model");
		$data["clientes"] = $this->clientes_model->listar();
		$data["title"] = "Listagem - Clientes";

		$this->load->view('pages/home', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	
	}
}
