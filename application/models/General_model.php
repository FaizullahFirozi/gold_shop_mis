<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class General_model extends MY_Model
{

     function __construct()
    {
        parent::__construct();
	}

	
	
    //Custom Query function
    public function fetch_CoustomQuery($sql)
    {

        $query = $this->db->query($sql);

        //echo $this->db->last_query();
        return $query->result();
	}
	
	
    // dynamic query for updating
    function update_record($update, $where, $tbl)
    {
        $this->db->where($where);

        return $this->db->update($tbl, $update);
    }


	//Fetch sales By Id...
	public function fetch_salesbyid($id)
	{
		$where = array(
			"sale_id" => $id
		);
		$this->db->select()->from('sales')->where($where);
		$query = $this->db->get();
		return $query->result();
	}


	
    //======  02 starts =========== //
    // flash msg
    public function set_msg($msg = NULL, $msg_type = NULL)
    {

        if ($msg_type == 1) { 

            $message = "<div class='alert alert-success text-center'>
                        <button data-dismiss='alert' class='close'>×</button>
                          $msg
                       </div>";

            $this->session->set_flashdata('msg', $message);
        } else {

            $message = "<div class='alert alert-danger text-center'>
                        <button data-dismiss='alert' class='close'>×</button>
                          $msg 
                       </div>";
            $this->session->set_flashdata('msg', $message);
        }
    }



	



}
