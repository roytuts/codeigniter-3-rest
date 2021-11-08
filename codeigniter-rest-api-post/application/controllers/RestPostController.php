<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Format.php';
require_once 'RestController.php';

use chriskacerguis\RestServer\RestController;

/**
 * Description of RestPostController
 *
 * @author https://roytuts.com
 */
class RestPostController extends RestController {
	
	function __construct() {
        parent::__construct();
		$this->load->model('ContactModel', 'cm');
    }

    function add_contact_post() {
        $contact_name = $this->post('contact_name');
        $contact_address = $this->post('contact_address');
        $contact_phone = $this->post('contact_phone');
        
        $result = $this->cm->add_contact($contact_name, $contact_address, $contact_phone);

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

}