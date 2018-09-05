<?php
class m_main extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function car()
	{
		$this->db->from('car');
		$query=$this->db->get();
		return $query->result();
	}

	public function article_newest()
	{
		$this->db->from('post');
		$this->db->where('category_post','article');
		$query = $this->db->get();
		return $query->result();
	}

	public function events_newest()
	{
		$this->db->from('post');
		$this->db->where('category_post','events');
		$query = $this->db->get();
		return $query->result();
	}

	public function promo_newest()
	{
		$this->db->from('post');
		$this->db->where('category_post','promo');
		$query = $this->db->get();
		return $query->result();
	}
}