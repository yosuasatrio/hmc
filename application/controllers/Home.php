<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_main');
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation', 'session']);
	}
	public function index()
	{
		$data['car'] = $this->m_main->car();
		$data['article'] = $this->m_main->article_newest();
		$data['events'] = $this->m_main->events_newest();
		$data['promo'] = $this->m_main->promo_newest();
		$data['konten'] = 'section/main-page';
		$this->load->view('main', $data);
	}
}
