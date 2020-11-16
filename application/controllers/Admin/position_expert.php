<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Position_expert extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PositionModel');
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการตำแหน่งผู้เชี่ยวชาญ | Admin X-Child',
            'admin_content' => $this->load->view('admin/position_expert', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }

    public function getListSelect()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $data = [
                'data' => $this->PositionModel->listSelect()
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
                'data' => $this->PositionModel->findAll()
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
            $result = $this->PositionModel->findById($id);
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
            $result = $this->PositionModel->create($data);
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
            $result = $this->PositionModel->update($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
