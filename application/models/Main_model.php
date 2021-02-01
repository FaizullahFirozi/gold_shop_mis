<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main_model extends MY_Model
{

     function __construct()
    {
        parent::__construct();
	}

    // get max sales no
    public function get_sales_max()
    {
        $this->db->select_max('sale_id');
        $q = $this->db->get('sales');
        $data = $q->row();
        return $data;
	}
	
	
    //Custom Query function
    public function fetch_coustom_query($sql)
    {

        $query = $this->db->query($sql);

        //echo $this->db->last_query();
        return $query->result();
    }

	
	// select 
	public function select_record($table , $order_by_id)
	{
		$this->db->select();
		$this->db->from($table);
		$this->db->order_by($order_by_id, 'DESC');
		$query = $this->db->get();
		
		return $query->result();
	}

	// add record 
	public function add_record($table, $array_data)
	{
		$query  = $this->db->insert($table, $array_data);
		if($query == 1){
			return $query;
		} else {
			return false;
		}
	}


	
    //update record
    function update_record($table, $update, $id)
    {
        $this->db->where($id);
        $query = $this->db->update($table, $update);
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    //delete record
    function delete_record($table, $field_name, $id)
    {
        $query = $this->db->where($field_name, $id);
        $this->db->delete($table);
        if ($query != NULL)
            return $query;
        else
            return false;
    }

	
    // get daily sales for dashboard
    public function daily_dash_board_sales($year, $month, $day)
    {
        $this->db->select('COUNT(sale_id) as sale_id_count');
        $this->db->from('sales');
        $this->db->where('date_year', $year); 
        $this->db->where('date_month', $month); 
        $this->db->where('date_day', $day); 
        $query = $this->db->get();
        return $query->result();
	}
	
    // get monthly sales for dashboard
    public function monthly_dash_board_sales($year, $month)
    {
        $this->db->select('COUNT(sale_id) as sale_id_count');
        $this->db->from('sales');
        $this->db->where('date_year', $year); 
        $this->db->where('date_month', $month); 
        $query = $this->db->get();
        return $query->result();
	}
	
    // get monthly sales for dashboard
    public function year_dash_board_sales($year)
    {
        $this->db->select('COUNT(sale_id) as sale_id_count');
        $this->db->from('sales');
        $this->db->where('date_year', $year); 
        $query = $this->db->get();
        return $query->result();
	}
	
    // get total everythings for dashboard
    public function total_dash_board_sales($table, $id, $total)
    {
        $this->db->select('COUNT('. $id . ') as '. $total);
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
	}
	

	

}
