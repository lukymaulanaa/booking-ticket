<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->database();
		$this->load->model('User_Model');
	}
	public function index()
	{
		$data['user'] = $this->user_Model->kode_cust();
		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('/template/footer');
	}

	public function tambah(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->User_Model->simpan();
			$this->session->set_flashdata('success_msg', 'Berhasil Di Tambah');
			redirect('Admin/','refresh');
		}
	}

	public function user(){
		$config['base_url'] = base_url()."Admin/user/";
		$config['total_rows'] = $this->db->query("SELECT * FROM user;")->num_rows();
		$config['per_page']=3;
		$config['num_links'] = 2;
		$config['uri_segment']=3;
		//Tambahan untuk styling
		$config['full_tag_open'] = "<ul class='pagination pagination-sm no-margin'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		$config['first_link']='< Pertama ';
		$config['last_link']='Terakhir > ';
		$config['next_link']='> ';
		$config['prev_link']='< ';
		
		$this->pagination->initialize($config);
		
		$data['user']=$this->User_Model->view_user($config);

		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('admin/user',$data);
		$this->load->view('/template/footer');
	}

	public function edit_user($id_customer){
	if ($this->input->post('submit')) {
		$this->User_Model->edit_user($id_user);
		redirect('admin/user','refresh');
		}
		$data['user'] = $this->Admin_Model->view_id_user($id_customer);
		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('/admin/edit-user',$data);
		$this->load->view('/template/footer');

	}

	public function hapus_user($id_user){
		$this->User_Model->hapus_user($id_user);
		redirect('Admin/user','refresh');
	}
}
