<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Format.php';
require_once 'RestController.php';

use chriskacerguis\RestServer\RestController;

/**
 * Description of RestPutController
 *
 * @author https://roytuts.com
 */
class RestPutController extends RestController {
	
	function __construct() {
        parent::__construct();
		$this->load->model('ContactModel', 'cm');
    }

    function update_contact_put() {
        $contact_id = $this->put('contact_id');
        $contact_name = $this->put('contact_name');
        $contact_address = $this->put('contact_address');
        $contact_phone = $this->put('contact_phone');

        $result = $this->cm->update_contact($contact_id, $contact_name, $contact_address, $contact_phone);

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

}