<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
	class Blog_model extends CI_Model{
		public function get_all(){
			$this->db->select('*');
			$this->db->from('t_blogs,t_blog_catalogs');
			$where="t_blogs.CATALOG_ID=t_blog_catalogs.CATALOG_ID";
			$this->db->where($where);
			$query=$this->db->get();

			return $query->result();

		}
	}

 ?>