<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class dashboard
 *
 * @property CI_Session session
 * @property user User
 * @property General General
 * @property Menus menus
 * @property Main_model Main_model
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        //Load Models.............
        $this->load->model('Users_model');
        $this->load->model('Main_model');
        $this->load->model('General_model');
        // $this->load->library("pagination");
    }

    //Header for Applications...................................
    public function header($title = 'Gold Shop System' )
    {
        $data['title'] = $title;
        $data['My_Controller'] = $this;
        $this->load->view('layout/header', $data);
    }

			//main dashboard (Main COntent)
			public function main_content()
			{
				$year = date('Y'); 
				$month = date('m');
				$day = date('d');

				// $data['today_sales'] = $this->Main_model->today_sales($today);
				// $data['month_sales'] = $this->Main_model->thisMonth_sales($month);
				$data['today_sales'] = $this->Main_model->daily_dash_board_sales($year, $month, $day);
				$data['month_sales'] = $this->Main_model->monthly_dash_board_sales($year, $month);
				$data['year_sales'] = $this->Main_model->year_dash_board_sales($year);
				$data['total_sales'] = $this->Main_model->total_dash_board_sales('sales', 'sale_id', 'total');
				$data['total_customers'] = $this->Main_model->total_dash_board_sales('customer', 'customer_id', 'total');
				$data['total_gold_samples'] = $this->Main_model->total_dash_board_sales('gold_sample', 'sample_id', 'total');
				// $data['due_amounts'] = $this->Main_model->recent_purchases();
				// $data["daily_st"] = $this->Main_model->get_daily_stock();
				// $data['topsales'] = $this->Main_model->topsales();
				// $data['topSalesYear'] = $this->Main_model->topSalesYear();

				$this->load->view('layout/main', $data);
			}

    // Footer for Application
    public function footer()
    {
        $this->load->view('layout/footer');
    }


}


?>
