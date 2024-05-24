<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        $this->load->model('Employee_model'); // Load the Employee model to get the list of employees
    }

    public function index()
    {
        $data['projects'] = $this->Project_model->get_all_projects();
        $this->load->view('adminpanel/projects/index', $data);
    }

    public function create()
    {
        $data['employees'] = $this->Employee_model->get_all_employees();
        $this->load->view('adminpanel/projects/create', $data);
    }

    public function store()
    {
        $data = array(
            'employee_id' => $this->input->post('employee_id'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        $this->Project_model->insert_project($data);
        redirect('admin/projects');
    }

    public function edit($id)
    {
        $data['project'] = $this->Project_model->get_project_by_id($id);
        $data['employees'] = $this->Employee_model->get_all_employees();
        $this->load->view('adminpanel/projects/edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'employee_id' => $this->input->post('employee_id'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        $this->Project_model->update_project($id, $data);
        redirect('admin/projects');
    }

    public function delete($id)
    {
        $this->Project_model->delete_project($id);
        redirect('admin/projects');
    }
}
