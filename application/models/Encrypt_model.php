<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Encrypt_model extends CI_Model {
     function  __construct(){
        parent::__construct();
         $this->load->library('encryption');
    }

    public function encryptionInitialize() {
        $this->encryption->initialize(array(
            'driver' => 'openssl',
            'cipher' => 'aes-256',
            'mode' => 'ctr',
            'key' => $this->config->item("aes_256_enc_key")
        ));
    }

	public function encryptField($field) { 
        $this->encryptionInitialize();
        return $this->encryption->encrypt($field);       
    }

    public function decryptField($field) {   
        // print_r($field);die;
       $this->encryptionInitialize();
        return $this->encryption->decrypt($field);       
    }

    public function hashInput ($field) {
        $input = $field;
        $salt = $this->config->item('salt_key');
        return md5($input.$salt);
    }

}