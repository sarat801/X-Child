<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Drug extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DrugModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการยา | Admin X-Child',
            'admin_content' => $this->load->view('admin/drug', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }


    public function getListSelect()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $data = [
                'data' => $this->DrugModel->listSelect()
            ];
            echo json_encode($data);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getAll()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $data = [
                'data' => $this->DrugModel->findAll()
            ];
            echo json_encode($data);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getById($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->DrugModel->findById($id);
            echo json_encode($result);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function create()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = $this->DrugModel->create($data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }

    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            header('Content-Type: application/json');
            $data = $this->input->post();
            $result = $this->DrugModel->update($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
