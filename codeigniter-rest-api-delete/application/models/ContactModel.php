<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of ContactModel
 *
 * @author https://roytuts.com
 */
class ContactModel extends CI_Model {

    private $contact = 'contact';

    function delete_contact($contact_id) {
        $this->db->where('contact_id', $contact_id);
        $this->db->delete($this->contact);
    }

}