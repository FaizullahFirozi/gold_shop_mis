<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class dashboard
 *
 * @property CI_Session session
 * @property Main_model Main_model
 */
//Extending all Controllers from Core Controller (MY_Controller)
class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        /*
         * check sessions user data if it exists,
         * it will go to the function requested
         * otherwise it will redirect to login*/
        if ($this->session->userdata("user_id")) {
        } else {
            redirect(base_url() . 'Users');
        }
    }

    //index function
    public function index()
    {

        $this->header($title= "Dashboard Page");
        $this->main_content();
        $this->load->view('dashboard');
        $this->footer();

    }


    // Employee Searching from dashboard form via ajax
    public function getSearchData()
    {
        $sql = $this->db->query("select EMP_ID,EMP_NAME,EMP_CELL,EMP_PIC from employee_profile")->result_array();
        echo json_encode($sql);

    }

}
