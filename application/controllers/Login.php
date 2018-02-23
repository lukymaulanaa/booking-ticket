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
		$this->load->view('/template/header');
		$this->load->view('admin/login');
		$this->load->view('/template/footer');
	}

	function __construct(){
		parent::__construct();
		$this->load->model('data_login');
	  
	   }
	  
	   function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
		 'username' => $username,
		 'password' => $password
		 );
		$cek = $this->data_login->cek_login('user',$where)->num_rows();
		if($cek > 0){
	  
		 $data_session = array(
		  'nama' => $username,
		  'status' => "login"
		  );
	  
		 $this->session->set_userdata($data_session);
	  
		 redirect("admin/index");

		}
		
		else{
			echo ('Maaf Username Dan Password Anda Salah !');
		
		   }
		   
		}
		 
		  function logout(){
		   $this->session->sess_destroy();
		   redirect(base_url('login'));
		  }
		 }
		 ?>