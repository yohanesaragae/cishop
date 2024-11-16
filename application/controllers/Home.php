<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function index()
	{
		$data['title'] = 'Homepage';
		$data['page']  = 'page/home/index';
		$this->view($data);
	}
}

/* End of file Controllername.php */