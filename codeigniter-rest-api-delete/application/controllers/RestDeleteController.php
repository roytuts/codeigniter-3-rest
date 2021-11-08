<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Format.php';
require_once 'RestController.php';

use chriskacerguis\RestServer\RestController;

/**
 * Description of RestDeleteController
 *
 * @author https://roytuts.com
 */
class RestDeleteController extends RestController {
	
	function __construct() {
        parent::__construct();
		$this->load->model('ContactModel', 'cm');
    }

    function delete_contact_delete($contact_id) {

        $result = $this->cm->delete_contact($contact_id);

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

}