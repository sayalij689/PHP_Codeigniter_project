<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

    public function get_all_employees()
    {
        $query = $this->db->get('employees');
        return $query->result_array();
    }

    public function insert_employee($data)
    {
        $this->db->insert('employees', $data);
    }

    public function get_employee_by_id($id)
    {
        $query = $this->db->get_where('employees', array('id' => $id));
        return $query->row_array();
    }

    public function update_employee($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('employees', $data);
    }

    public function delete_employee($id)
    {
        $this->db->delete('employees', array('id' => $id));
    }
}
