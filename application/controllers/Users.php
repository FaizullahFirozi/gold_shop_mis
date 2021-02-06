<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	
    public function __construct()
    {
		parent::__construct();
		
	}
	
	function index(){

		$this->load->view('users/login');

	}

	
	function Auth_login()
	{
		$rules = array(
			array('field' => 'username', 'label' => 'Username','rules' => 'required|min_length[3]'),
			array('field' => 'password', 'label' => 'Password','rules' => 'required|min_length[5]')
		);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run()== false)
		{
				$msg = "لطفً یوزرنیم و پسورد تان وارد کنید";
				$this->session->set_flashdata('info', $msg);
					$this->index();

		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->Users_model->AuthLogin($username, $password);
	
			if ($result) {

				$this->session->set_userdata("user_id", $result['user_id']);
				$this->session->set_userdata("full_name", $result['full_name']);

				$msg = " Welcome Dear " . $this->session->userdata('full_name');
					$this->session->set_flashdata('success', $msg);
					$this->General_model->set_msg($msg, 1);

                redirect(base_url() . 'index.php/Dashboard');

			
			} else {
				$msg = "نام و یا پسورد تان غلط است ";
					$this->session->set_flashdata('error', $msg);
					$this->General_model->set_msg($msg, 2);
				redirect(base_url() . 'Users');
			}
		}
	}

	/*
     * Logging Out the user or Sign Out the user
     * logout function is in user model
     * */
    public function Logout()
    {
        $this->Users_model->logout();
	}



    // Changing password by user
	public function change_password()
    {
        $this->header($title= "Ghange Password Page");
        $this->load->view('Users/change_password');
        $this->footer();
	}

	
    // Changing password by user
    public function changePasswordByUser()
    {
		$rules = array(
			array('field' => 'old_pass', 'label' => 'Old Password','rules' => 'required|min_length[5]'),
			array('field' => 'new_pass', 'label' => 'New Password','rules' => 'required|min_length[5]'),
			array('field' => 'retype_pass', 'label' => 'Retype Password','rules' => 'required|min_length[5]')
		);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run()== false)
		{
			$this->change_password();

		} else { 

				extract($_POST);
			$userid = $this->session->userdata('user_id');
			

			$old_pass = sha1(md5($this->input->post('old_pass'))); // ab perfect ha acha sabr chor ,mouse sabko krta hun
			$new_pass = sha1(md5($this->input->post('new_pass')));
			$retype_pass = sha1(md5($this->input->post('retype_pass')));

			$check_old_pass = "SELECT `password` FROM `users` WHERE `user_id` = $userid";
			$check_cout = $this->General_model->fetch_CoustomQuery($check_old_pass);
			foreach ($check_cout as $check) {
				$count = $check->password;
			}
			if ($new_pass == $retype_pass) {
				if ($count == $old_pass) {
					$tbl = "users";
					$update = array(
						"password" => $new_pass,
						"user_id" => $userid,
					);
					$where = array(
						"user_id" => $userid
					);
					$this->General_model->update_record($update, $where, $tbl);
					$msg = "پسورد تان تغیر شد. لطفً دوباره لاگین شو که مطمئن شوی";
					$this->session->set_flashdata('success', $msg);
					$this->General_model->set_msg($msg, 1);
					redirect(base_url() . "index.php/Users/change_password");
				} else {
					$msg = "پسورد قبلی تان در دیتابیس نیست";
					$this->session->set_flashdata('error', $msg);
					$this->General_model->set_msg($msg, 2);
					redirect(base_url() . "index.php/Users/change_password");
				}
			} else {

				$msg = "پسورد جدید و پسورد تائید یکسان نیست";
					$this->session->set_flashdata('warning', $msg);
					$this->General_model->set_msg($msg, 2);
				redirect(base_url() . "index.php/Users/change_password");
			}
		}
    }


	
    // Changing changeUserName
	public function changeUserName()
    {
		$this->header($title= "Change User Name");
		$userid = $this->session->userdata('user_id');
		$data['users'] = $this->Main_model->fetch_coustom_query('select full_name from users WHERE user_id='. $userid);
        $this->load->view('Users/change_username', $data);
        $this->footer();
	}


	
    // Changing password by user
    public function changeUserNameByUser()
    {
		$rules = array(
			array('field' => 'password', 'label' => 'Password','rules' => 'required'),
			array('field' => 'full_name', 'label' => 'Full Name','rules' => 'required')
		);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run()== false)
		{
			$this->changeUserName();

		} else { 

				extract($_POST);
			$userid = $this->session->userdata('user_id');
			

			$password = sha1(md5($this->input->post('password'))); // ab perfect ha acha sabr chor ,mouse sabko krta hun
			$full_name = ($this->input->post('full_name')); 
			
			$check_password = "SELECT `password` FROM `users` WHERE `user_id` = $userid";
			$check_cout = $this->General_model->fetch_CoustomQuery($check_password);
			foreach ($check_cout as $check) {
				$count = $check->password;
			}
				if ($count == $password) {
					$tbl = "users";
					$update = array(
						"full_name" => $full_name						
					);
					$where = array(
						"user_id" => $userid
					);
					$this->General_model->update_record($update, $where, $tbl);
					$msg = " نام شما تغیر شد دوباره لاگین شود که ببنید";
					$this->session->set_flashdata('success', $msg);
					$this->General_model->set_msg($msg, 1);
					redirect(base_url() . "index.php/Users/changeUserName");
				} else {
					$msg = "پسورد تان غلط است";
					$this->session->set_flashdata('error', $msg);
					$this->General_model->set_msg($msg, 2);
					redirect(base_url() . "index.php/Users/changeUserName");
				}
			
		}
    }


}
