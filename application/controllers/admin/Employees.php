<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_model');
    }

    public function index()
    {
        $data['employees'] = $this->Employee_model->get_all_employees();
        $this->load->view('adminpanel/employees/index', $data);
    }

    public function create()
    {
        $this->load->view('adminpanel/employees/create');
    }

    public function store()
    {
        // Collects the input data from the POST request.
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        $this->Employee_model->insert_employee($data);
        redirect('admin/employees');
    }

    public function edit($id)
    {
        $data['employee'] = $this->Employee_model->get_employee_by_id($id);
        $this->load->view('adminpanel/employees/edit', $data);
    }

    public function update($id)
    {
        //Collects the input data from the POST request.
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address')
        );
        $this->Employee_model->update_employee($id, $data);
        redirect('admin/employees');
    }

    public function delete($id)
    {
        $this->Employee_model->delete_employee($id);
        redirect('admin/employees');
    }
}
