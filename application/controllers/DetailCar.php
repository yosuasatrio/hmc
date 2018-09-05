<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailCar extends CI_Controller 
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
		$data['konten'] = 'section/detail-car';
		$this->load->view('main', $data);	
	}
}
