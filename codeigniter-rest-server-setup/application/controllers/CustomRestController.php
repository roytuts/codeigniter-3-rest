<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Format.php';
require_once 'RestController.php';

use chriskacerguis\RestServer\RestController;

class CustomRestController extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
	
	public function index()	{
		$data['...'] = ...;
		$this->load->view('...', $data);
	}
}