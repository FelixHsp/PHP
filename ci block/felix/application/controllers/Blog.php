<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->load->model('Blog_model');
			$uid=$this->session->userdata('uid');
			$rs=$this->Blog_model->get_all_by_name($uid);
			$data['blogs']=$rs;
			$this->load->view('index_logined.php',$data);
		}
		public function unindex(){
			$this->load->model('Blog_model');
			$rs=$this->Blog_model->get_all();
			$data['blogs']=$rs;


			$this->load->view('index.php',$data);
		}



	}

 ?>