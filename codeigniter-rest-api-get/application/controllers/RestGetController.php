<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Format.php';
require_once 'RestController.php';

use chriskacerguis\RestServer\RestController;

/**
 * Description of RestGetController
 *
 * @author https://roytuts.com
 */
class RestGetController extends RestController {
	
	function __construct() {
        parent::__construct();
		$this->load->model('ContactModel', 'cm');
    }

    function contacts_get() {
        $contacts = $this->cm->get_contact_list();

        if ($contacts) {
            $this->response($contacts, 200);
        } else {
            $this->response(NULL, 404);
        }
    }

    function contact_get() {
        if (!$this->get('id')) {
            $this->response(NULL, 400);
        }

        $contact = $this->cm->get_contact($this->get('id'));

        if ($contact) {
            $this->response($contact, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
    }

}