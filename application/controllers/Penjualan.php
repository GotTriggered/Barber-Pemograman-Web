<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function loadview($view, $data)
	{
		$this->load->view('template/header',$data);
		$this->load->view($view, $data);
		$this->load->view('template/footer');

	}
	public function index()
	{
		$data['judul'] = 'Data Penjualan';

		$this->loadview('view/Penjualan',$data);
	}

	public function form_input()
	{
		$data['nama_form'] = 'Input Data Penjualan';
		$data['judul'] = 'Input Data Penjualan';
		$this->loadview('view/input_penjualan',$data);
	}
}
