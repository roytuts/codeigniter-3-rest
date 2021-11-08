<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of ContactModel
 *
 * @author https://roytuts.com
 */
class ContactModel extends CI_Model {

    private $contact = 'contact';

    function update_contact($contact_id, $contact_name, $contact_address, $contact_phone) {
        $data = array('contact_name' => $contact_name, 'contact_address' => $contact_address, 'contact_phone' => $contact_phone);
        $this->db->where('contact_id', $contact_id);
        $this->db->update($this->contact, $data);
    }

}