<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of ContactModel
 *
 * @author https://roytuts.com
 */
class ContactModel extends CI_Model {

    private $contact = 'contact';

    function get_contact_list() {
        $query = $this->db->get($this->contact);
        if ($query) {
            return $query->result();
        }
        return NULL;
    }

    function get_contact($id) {
        $query = $this->db->get_where($this->contact, array("contact_id" => $id));
        if ($query) {
            return $query->row();
        }
        return NULL;
    }

}