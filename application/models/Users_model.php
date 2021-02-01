<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends MY_Model
{

     function __construct()
    {
        parent::__construct();
	}

	
    // auth login
    public function AuthLogin($username, $password)
    {
        $pass = sha1(md5($password));
        // echo $pass;

        //$pass = sha1($password);
        $this->db->select("*");
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
         $query = $this->db->get();
        // echo $this->db->last_query();
        return $query->first_row('array');
    }

	
    //logout
    public function logout()
    {
		$this->session->sess_destroy();	
        redirect(base_url());
    }


}
