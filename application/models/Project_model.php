<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

    public function get_all_projects()
    {
        $this->db->select('projects.*, employees.name as employee_name');
        $this->db->from('projects');
        $this->db->join('employees', 'projects.employee_id = employees.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_project($data)
    {
        $this->db->insert('projects', $data);
    }

    public function get_project_by_id($id)
    {
        $this->db->select('projects.*, employees.name as employee_name');
        $this->db->from('projects');
        $this->db->join('employees', 'projects.employee_id = employees.id');
        $this->db->where('projects.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_project($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('projects', $data);
    }

    public function delete_project($id)
    {
        $this->db->delete('projects', array('id' => $id));
    }
}
