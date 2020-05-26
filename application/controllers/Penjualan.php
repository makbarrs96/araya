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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$datapenjualan = $this->db->get("penjualan")->result();
		$data = array(
			'form' => 'penjualan/penjualan',
			'penjualan' => $datapenjualan

		);
		$this->load->view('index',$data);
	}

	public function input()
	{
		$data = array(
			'form' => 'penjualan/input'
		);
		$this->load->view('index',$data);
	}

	public function insert()
	{
		$tanggal = $this->input->post("tanggal");
		$penjualan = $this->input->post("penjualan");
		echo $tanggal;
		echo $penjualan;
		$data = array(
		"tanggal"=>$tanggal, 
		"jumlah"=>$penjualan,);
		$this->db->insert("penjualan",$data);
		redirect(base_url()."index.php/penjualan");

	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$penjualan=$this->db->get_where("penjualan",array("idPenjualan"=>$id))->row_array();
		$data = array(
			'form' => 'penjualan/editpenjualan',
			'penjualan' => $penjualan 
		);
		$this->load->view('index',$data);
	}

	public function update()
	{
		$id=$this->input->post("idpenjualan");
		$tanggal = $this->input->post("tanggal");
		$penjualan = $this->input->post("penjualan");
		echo $tanggal;
		echo $penjualan;
		$data = array(
		"tanggal"=>$tanggal, 
		"jumlah"=>$penjualan,);
		$this->db->where("idPenjualan",$id)->update("penjualan",$data);
		redirect(base_url()."index.php/penjualan");
	}
	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("idPenjualan",$id)->delete('penjualan');
		redirect(base_url()."index.php/penjualan");
	}
}


