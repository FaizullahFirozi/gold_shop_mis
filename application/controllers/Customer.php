<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Customer extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
         if ($this->session->userdata("user_id")) {
        } else {
            redirect(base_url() . 'Users');
        }
    }

    //index function
    public function index()
    {
	}
	
  
	  //  Customer show list	
	public function list_customer()
    {
		$this->header($title= "Customer");
		$data['customer'] = $this->Main_model->select_record('customer', 'customer_id');
        $this->load->view('customer/customer_list', $data);
	}

	  //  Customer add form	
	public function add_customer()
    {
		$this->header($title= "add_Customer");
        $this->load->view('customer/customer_add');
        $this->footer();
	}

	public function insert_customer()
    {
		
		$rules = array(
			array('field' => 'first_name', 'label' => 'First Name','rules' => 'required'),
			array('field' => 'father_name', 'label' => 'Father Name','rules' => 'required'),
			array('field' => 'phone', 'label' => 'phone','rules' => 'required'),
			);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run()== false)
		{
			$this->add_customer();

		} else {
			$data = array(
				'first_name' => $this->input->post("first_name"),
				'last_name' => $this->input->post("last_name"),
				'father_name' => $this->input->post("father_name"),
				'phone' => $this->input->post("phone"),
				'date_save' => date('Y-m-d')
				);

			$result = $this->Main_model->add_record('customer', $data);

			if($result){
				$msg = 'customer added Successfully..!';
				$this->General_model->set_msg($msg, 1);
				redirect(base_url() . 'Customer/list_customer'); 
			} else {

				$msg ='Sales Not Added..!';
				$this->General_model->set_msg($msg, 2);
				$this->add_customer();
			}
		 }
	}

	 // Edit customer form
	 public function edit_customer($id)
	 {
		$id = $this->uri->segment(3);

		 $data['customer'] = $this->General_model->fetch_CoustomQuery('SELECT * FROM customer WHERE customer_id=' . $id);
		 $this->header();
		 $this->load->view('Customer/customer_edit', $data);
		 $this->footer();
	 }

	
    // Update Customer Details
    public function update_customer()
    {
		
			$data = array(
				'first_name' => $this->input->post("first_name"),
				'last_name' => $this->input->post("last_name"),
				'father_name' => $this->input->post("father_name"),
				'phone' => $this->input->post("phone"),
				);

				$customer_id = $this->input->post('customer_id');
				$where = array('customer_id' => $customer_id);

			$result = $this->Main_model->update_record('customer', $data, $where);

			if($result){
				$msg = 'customer Edit Successfully..!';
				$this->General_model->set_msg($msg, 1);
				redirect(base_url() . 'Customer/list_customer'); 
			} else {

				$msg ='Sales Not Edit..!';
				$this->General_model->set_msg($msg, 2);

				$this->list_customer();
			}
	}



	  // Delete specific Customer
	  public function delete_customer()
	  {
		  $id = $this->uri->segment(3);
		  $result = $this->Main_model->delete_record('customer', 'customer_id', $id);
		  $msg = 'Successfully deleted ';
		  $this->General_model->set_msg($msg, 1);
		  redirect(base_url() . 'index.php/Customer/list_customer');
	  }
	  





}
