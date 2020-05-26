<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

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
		$datastok = $this->db->get("Bahan_bakar")->result();
		$data = array(
			'form' => 'Stok/stok',
			'stok' => $datastok

		);
		$this->load->view('index',$data);
	}

		public function update()
	{
		$id=1;
		$stok_akhir = $this->input->post("stok_akhir");
		echo $stok_akhir;
		$data = array(
		"stok_akhir"=>$stok_akhir,);
		$this->db->where("idBahan_bakar",$id)->update("Bahan_bakar",$data);
		redirect(base_url()."index.php/stok");
		}

}


