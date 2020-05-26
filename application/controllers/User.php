<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$datauser = $this->db->get("user")->result();
		$data = array(
			'form' => 'User/user',
			'user' => $datauser

		);
		$this->load->view('index',$data);
	}

		public function input()
	{
		$data = array(
			'form' => 'User/inputuser'
			
		);
		$this->load->view('index',$data);
	}

		public function insert()
	{
		$username = $this->input->post("Username");
		$password = md5($this->input->post("Password"));
		echo $username;
		echo $password;
		$data = array(
		"username"=>$username, 
		"password"=>$password,);
		$this->db->insert("user",$data);
		redirect(base_url()."index.php/user");

	}

	public function delete()
	{
		$id=$this->uri->segment(3);

		$this->db->where("idUser",$id)->delete('user');
		redirect(base_url()."index.php/user");
	}


}
