<?php defined('BASEPATH') or exit('No direct script access allowed');
class Cost_model extends CI_Model
{
  function get_cost_saving($id)
  {
    $this->db->select('*');
    $this->db->from('cost_saving_processing');
    $this->db->where(['cost_saving_calculation_id'=>$id]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

  function get_cost_saving_cal($id)
  {
    $this->db->select('*');
    $this->db->from('cost_saving_processing');
    $this->db->where(['cost_saving_calculation_id'=>$id]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function fetch_get_cost_saving($id)
  {
    $this->db->select('*');
    $this->db->from('cost_saving_calculation');
    $this->db->where(['id'=>$id]);
    $qry = $this->db->get();
    $row=$qry->row();
    return $row;
  }
  
  function sum_totalcost_reduction_per_seventy($id)
  {
    $this->db->select_sum('totalcost_reduction_per_seventy');
    $this->db->from('cost_saving_processing');
    $this->db->where(['cost_saving_calculation_id'=>$id]);
    $qry = $this->db->get();
    $row=$qry->row();
    return $row;
  }
  function sum_totalcost_reduction_per_eighty($id)
  {
    $this->db->select_sum('totalcost_reduction_per_eighty');
    $this->db->from('cost_saving_processing');
    $this->db->where(['cost_saving_calculation_id'=>$id]);
    $qry = $this->db->get();
    $row=$qry->row();
    return $row;
  }
  function sum_totalcost_reduction_per_ninety($id)
  {
    $this->db->select_sum('totalcost_reduction_per_ninety');
    $this->db->from('cost_saving_processing');
    $this->db->where(['cost_saving_calculation_id'=>$id]);
    $qry = $this->db->get();
    $row=$qry->row();
    return $row;
  }
  function sum_totalcost_reduction_per_ninetyfive($id)
  {
    $this->db->select_sum('totalcost_reduction_per_ninetyfive');
    $this->db->from('cost_saving_processing');
    $this->db->where(['cost_saving_calculation_id'=>$id]);
    $qry = $this->db->get();
    $row=$qry->row();
    return $row;
  }

  public function check_column_value($value_to_check, $column_to_check) {
    $this->db->select('*');
    $this->db->from('cost_saving_calculation');
    $this->db->where($column_to_check, $value_to_check);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return true; 
    } else {
        return false;
    }
}

}