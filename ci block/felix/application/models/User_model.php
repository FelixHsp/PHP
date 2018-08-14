<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function insert_data($account,$name,$pass){
			$data = array(
				'ACCOUNT' =>$account,
				'NAME' =>$name,
				'PASSWORD' =>$pass,
			);
			$query=$this->db->insert('t_users',$data);
			return $query;
		}
		public function sel_name($account,$pwd){
			$query=$this->db->get_where('t_users',array(
				'ACCOUNT' =>$account,
				'PASSWORD' =>$pwd,
			));
			return $query->row();
		}
	}


?>