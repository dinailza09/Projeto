<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index()

	{
		$this->load->model("clientes_model");
		$data["clientes"] = $this->clientes_model->listar();
		$data["title"] = "Cadastro - Clientes";

		
		$this->load->view('pages/clientes', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function store()
	{
		$cliente = $_POST;
		$this->load->model("clientes_model");
		$data["clientes"] = $this->clientes_model->store($cliente);
		
		redirect("home");
		
		
	}

	public function teste()
	{
		$client = service('curlrequest');
		try{
			$response= $client -> request ('GET', 'https://api.tomticket.com/clientes/b66a1ad8e7c64750c816508ce1f1c20a/1');
			print_r($response);
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

}
