<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Type_school extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('U_admin') == 1 || $this->session->userdata('U_admin') == 2) {
            $this->load->model('TypeSchoolModel');
        } else {
            $this->session->set_flashdata('error-login', 'กรุณา login ก่อนเพื่อใช้งาน');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'จัดการประเภทโรงเรียน | Admin X-Child',
            'admin_content' => $this->load->view('admin/type_school', NULL, TRUE)
        ];
        $this->load->view('index_admin', $data);
    }


    public function getListSelect()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $data = [
                'data' => $this->TypeSchoolModel->listSelect()
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
                'data' => $this->TypeSchoolModel->findAll()
            ];
            echo json_encode($data);
        } else {
            show_error('Allow Form GET', 405);
        }
    }

    public function getbyId($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET') {
            header('Content-Type: application/json');
            $result = $this->TypeSchoolModel->findById($id);
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
            $result = $this->TypeSchoolModel->create($data);
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
            $result = $this->TypeSchoolModel->update($id, $data);
            echo json_encode($result);
        } else {
            show_error('Allow Form POST', 405);
        }
    }
}
