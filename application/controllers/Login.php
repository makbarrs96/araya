<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$datalogin = $this->db->get("user")->result();
		$data = array(
			
			'form' => 'Login/login',
			'login' => $datalogin

		);
		$this->load->view('Login/login',$data);
	}

	public function cekLogin()
	{
		$username = $this->input->post("Username");
		$password = md5($this->input->post("Password"));

		$cek = $this->db->get_where("user",array("username"=>$username));
		if ($cek->num_rows()>0) {
			$user = $cek->row_array();
			if ($user['password']==$password) {
				$this->session->set_userdata(
					array(
						'user' => $user['username']
					)
				);
				redirect(base_url());
			}else{
				redirect(base_url()."index.php/Login");
			}
		}else{

			redirect(base_url()."index.php/Login");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."index.php/Login");
	}

}


