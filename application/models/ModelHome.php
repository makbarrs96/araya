<?php

class ModelHome extends CI_Model {

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
	

	public function get_peramalan(){
		$date = date("Y-m-d");
		$mulai = date("Y-m-d",strtotime("-91 days"));
		$sampai = date("Y-m-d",strtotime("-1 days"));
		$data = $this->db
		->select("(SUM(jumlah)/COUNT(*)) as peramalan,COUNT(*)")
		->get_where("penjualan",array("DATE(tanggal)>="=>$mulai,"DATE(tanggal) <"=>$sampai))->row_array();
		// die(var_dump($data));
		return $data;

	} 

	public function get_stok(){
		return $this->db->get("bahan_bakar")->row_array();
	}

	public function get_penjualan(){
		return $this->db
		->order_by("tanggal","DESC")
		->get("penjualan")->row_array();
	}

}