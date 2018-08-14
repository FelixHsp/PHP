<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('User_model');
		}

		public function unlogin(){
			$array_items=array('uid','account','name');
			$this->session->unset_userdata($array_items);
			redirect('Blog/index');
		}

		public function login(){
			$this->load->view('login.php');
		}
		public function do_login(){
			$account=$this->input->post('email');
			$pwd=$this->input->post('pwd');
			$query=$this->User_model->sel_name($account,$pwd);
			if ($query) {
				$newdata=array(
					'uid'=>$query->USER_ID,
					'account'=>$query->ACCOUNT,
					'name'=>$query->NAME,

				);
				$this->session->set_userdata($newdata);
				redirect('Blog/index');
			}
		}
		public function reg(){
			$this->load->view('reg.php');
		}

		public function do_reg(){
			$account=$this->input->post('email');
			$name=$this->input->post('name');
			$pass=$this->input->post('pwd');
			$query=$this->User_model->insert_data($account,$name,$pass);
			if ($query) {
				redirect('user/login');
			}
		}

	}


 ?>