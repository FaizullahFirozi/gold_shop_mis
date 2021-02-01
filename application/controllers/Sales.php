<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class dashboard
 *
 * @property CI_Session session
 * @property Main_model Main_model
 */
//Extending all Controllers from Core Controller (MY_Controller)
class Sales extends MY_Controller
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
        // $this->header($title= "dashboard");
        // $this->load->view('dashboard');
        // $this->footer();

	}
	
	
    // creating New Sale Form
    public function new_sale()
    {

        $record = $this->Main_model->get_sales_max();
        $ddd = $record->sale_id;
		$data['sale_id'] = $ddd + 1;


		$data['customer'] = $this->Main_model->fetch_coustom_query('select * from customer ORDER BY customer_id DESC');
		$data['gold_sample'] = $this->Main_model->fetch_coustom_query('select * from gold_sample ORDER BY sample_id DESC');

        // $this->load->view('sales/new_sale', $data);
		
		
		$this->header($title = 'New Sales');
        $this->load->view('sales/new_sale', $data);
        $this->footer();

	}

	
	public function list_sale()
    {
		$this->header($title = 'New Sales');
		$data['sales'] = $this->Main_model->fetch_coustom_query('select * from sales INNER JOIN gold_sample ON gold_sample.sample_id = sales.sample_id INNER JOIN customer ON customer.customer_id = sales.customer_id ORDER BY sale_id DESC');
        $this->load->view('sales/sale_history', $data);
	}

	public function insert_sale()
    {
		
		$rules = array(
			array('field' => 'sr_no', 'label' => 'Sr No','rules' => 'required'),
			array('field' => 'customer_id', 'label' => 'Customer Name','rules' => 'required'),
			array('field' => 'sample_id', 'label' => 'Glod Sample','rules' => 'required'),
			array('field' => 'gold_weight', 'label' => 'Gold Weight','rules' => 'required'),
			array('field' => 'gold_percentage', 'label' => 'Gold Percentage','rules' => 'required'),
			array('field' => 'date_year', 'label' => 'Year','rules' => 'required'),
			array('field' => 'date_month', 'label' => 'Month','rules' => 'required'),
			array('field' => 'date_day', 'label' => 'Day','rules' => 'required')
			);
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run()== false)
		{
			$this->new_sale();

		} else {
			$data = array(
				'sr_no' => $this->input->post("sr_no"),
				'customer_id' => $this->input->post("customer_id"),
				'sample_id' => $this->input->post("sample_id"),
				'gold_weight' => $this->input->post("gold_weight"),
				'gold_percentage' => $this->input->post("gold_percentage"),
				'gold_carat' => $this->input->post("gold_carat"),
				'date_year' => $this->input->post("date_year"),
				'date_month' => $this->input->post("date_month"),
				'date_day' => $this->input->post("date_day"),
				'date_hijri' => $this->input->post("date_hijri")
				);


			$result = $this->Main_model->add_record('sales', $data);

			if($result){
				$msg = 'Sales added Successfully..!';
				$this->General_model->set_msg($msg, 1);
				redirect(base_url() . 'Sales/list_sale'); 
			} else {

				$msg ='Sales Not Added..!';
				$this->General_model->set_msg($msg, 2);
				$this->new_sale();
			}
		 }
	}


	
    // creating edit Sale Form
    public function edit_sale($id)
    {
		$id = $this->uri->segment(3);
		$data['sale_id'] = $id;


		$data['customer'] = $this->Main_model->fetch_coustom_query('select * from customer');
		$data['gold_sample'] = $this->Main_model->fetch_coustom_query('select * from gold_sample');
		$data['sales'] = $this->Main_model->fetch_coustom_query('select * from sales INNER JOIN gold_sample ON gold_sample.sample_id = sales.sample_id INNER JOIN customer ON customer.customer_id = sales.customer_id WHERE sale_id='. $id);

		$this->header($title = 'Edit Sales');
        $this->load->view('sales/sale_edit', $data);
        $this->footer();

	}

	public function update_sale()
    {

		$data = array(
			'sr_no' => $this->input->post("sr_no"),
			'customer_id' => $this->input->post("customer_id"),
			'sample_id' => $this->input->post("sample_id"),
			'gold_weight' => $this->input->post("gold_weight"),
			'gold_percentage' => $this->input->post("gold_percentage"),
			'gold_carat' => $this->input->post("gold_carat"),
			'date_year' => $this->input->post("date_year"),
			'date_month' => $this->input->post("date_month"),
			'date_day' => $this->input->post("date_day"),
			'date_hijri' => $this->input->post("date_hijri")
			);

			$sale_id = $this->input->post("sale_id");
			$where = array('sale_id' => $sale_id);

			$result = $this->Main_model->update_record('sales', $data, $where);

			if($result){
				$msg = 'Sale Edit Successfully..!';
				$this->General_model->set_msg($msg, 1);
				$this->list_sale();
				// redirect(base_url() . 'Sales/list_sale'); 
			} else {

				$msg ='Sales Not Edit..!';
				$this->General_model->set_msg($msg, 2);

				$this->list_sale();
			}
	}

    // Delete specific sales
	public function delete_sale()
    {
		$id = $this->uri->segment(3);
		$result = $this->Main_model->delete_record('sales', 'sale_id', $id);
		$msg = 'Successfully deleted ';
		$this->General_model->set_msg($msg, 1);
        redirect(base_url() . 'index.php/Sales/list_sale');
	}


	public function invoice($id) {
		$this->header($title = 'Invoice');
		$data['customer'] = $this->Main_model->fetch_coustom_query('select * from sales  INNER JOIN gold_sample ON gold_sample.sample_id = sales.sample_id INNER JOIN customer ON customer.customer_id = sales.customer_id where sale_id=' . $id);
		$data['sales'] = $this->General_model->fetch_salesbyid($id);
        $this->load->view('sales/invoice', $data);
        $this->footer();

	}

	public function invoice_print($id) {
		
		$this->header($title = 'Invoice print');
		$data['customer'] = $this->Main_model->fetch_coustom_query('select * from sales  INNER JOIN gold_sample ON gold_sample.sample_id = sales.sample_id INNER JOIN customer ON customer.customer_id = sales.customer_id where sale_id=' . $id);
		$data['sales'] = $this->General_model->fetch_salesbyid($id);
		$data['sales'] = $this->General_model->fetch_salesbyid($id);
        $this->load->view('sales/invoice-print', $data);
        // $this->footer();

	}


}
