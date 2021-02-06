<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class dashboard
 *
 * @property CI_Session session
 * @property Main_model Main_model
 */
//Extending all Controllers from Core Controller (MY_Controller)
class Gold_sample extends MY_Controller
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
	
	
	
	public function list_gold_sample()
    {
		$this->header($title = 'Gold sample Page');
		$data['gold_sample'] = $this->Main_model->select_record('gold_sample', 'sample_id');
        $this->load->view('gold_sample/sample_list', $data);
		
	}

	
	  //  Customer add form	
	  public function add_gold_sample()
	  {
		  $this->header($title= "Add Gold sample");
		  $this->load->view('gold_sample/sample_add');
		  $this->footer();
	  }

	  
	public function insert_gold_sample()
    {
		
		$rules = array(
			array(
				'field' => 'sample_name', 
				'label' => 'Sample Name',
				'rules' => 'required|is_unique[gold_sample.sample_name]'),
			);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run()== false)
		{
			
			$msg ='سلام ګرانه د سمپل نوم ورکړه';
			$this->session->set_flashdata('info', $msg);
			$this->add_gold_sample();

		} else {
			$data = array(
				'sample_name' => $this->input->post("sample_name"),
				);

			$result = $this->Main_model->add_record('gold_sample', $data);

			if($result){
				$msg = 'Gold Sample added Successfully..!';
			$this->session->set_flashdata('success', $msg);
			$this->General_model->set_msg($msg, 1);
				redirect(base_url() . 'Gold_sample/list_gold_sample'); 
			} else {

				$msg ='Gold Sample Not Added..!';
			$this->session->set_flashdata('error', $msg);
			$this->General_model->set_msg($msg, 2);
				$this->add_gold_sample();
			}
		 }
	}


	
	 // Edit Sample form
	 public function edit_sample($id)
	 {
		$id = $this->uri->segment(3);

		 $data['gold_sample'] = $this->General_model->fetch_CoustomQuery('SELECT * FROM gold_sample WHERE sample_id=' . $id);
		 $this->header($title= "Edit Gold sample");
		 $this->load->view('gold_sample/sample_edit', $data);
		 $this->footer();
	 }

	
    // Update Gold Sample Details
    public function update_gold_sample()
    {
		
			$data = array(
				'sample_name' => $this->input->post("sample_name"),
				);

				$sample_id = $this->input->post('sample_id');
				$where = array('sample_id' => $sample_id);

			$result = $this->Main_model->update_record('gold_sample', $data, $where);

			if($result){
				$msg = 'Sample Edit Successfully..!';
				$this->session->set_flashdata('success', $msg);
				$this->General_model->set_msg($msg, 1);
				redirect(base_url() . 'Gold_sample/list_gold_sample'); 
			} else {

				$msg ='Sales Not Edit..!';
				$this->session->set_flashdata('error', $msg);
				$this->General_model->set_msg($msg, 2);

				$this->list_gold_sample();
			}
	}




	
    // Delete specific gold Sample
	public function delete_gold_sample()
    {
		$id = $this->uri->segment(3);
		$result = $this->Main_model->delete_record('gold_sample', 'sample_id', $id);
		$msg = 'Successfully deleted ';
				$this->session->set_flashdata('warning', $msg);
				$this->General_model->set_msg($msg, 1);
        redirect(base_url() . 'index.php/Gold_sample/list_gold_sample');
	}



}
