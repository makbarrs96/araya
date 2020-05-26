<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->model('ModelHome');
		$peramalan = $this->ModelHome->get_peramalan();
		$stok = $this->ModelHome->get_stok();
		$data = array(
			'form' => 'home/home',
			'peramalan' => $peramalan,
			'bbm' => $stok,
			'penjualan' => $this->ModelHome->get_penjualan()
		);
		$this->load->view('index',$data);
	}
}
