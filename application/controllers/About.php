<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		//$this->load->model('m_home');
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}
	public function index()
	{
		$data['konten'] = 'section/about-us';
		$this->load->view('main', $data);	
	}
}
