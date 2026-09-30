<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
    }

    public function index()
    {
        $this->load->view('admin/admin_register_view');
    }

    private function generate_admin_code()
    {
        do {
            $code = rand(100000, 999999);
            $exists = $this->db->get_where('user_master', ['admin_code' => $code])->row();
        } while ($exists);

        return $code;
    }

    public function store()
    {
        $name = trim($this->input->post('name'));
        $business_name = trim($this->input->post('business_name')); // ✅ important
        $mobile = trim($this->input->post('mobile'));
        $email = trim($this->input->post('email'));
        $pass = trim($this->input->post('password'));

        if (empty($name) || empty($business_name) || empty($mobile) || empty($email) || empty($pass)) {
            $this->session->set_flashdata('error', 'All fields are required');
            redirect('admin-register');
        }

        // Check mobile duplicate
        $check = $this->db->get_where('user_master', ['mobile' => $mobile])->row();
        if ($check) {
            $this->session->set_flashdata('error', 'Mobile number already registered');
            redirect('admin-register');
        }

        $admin_code = $this->generate_admin_code();
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        $data = [
            'admin_code' => $admin_code,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'business_name' => $business_name, // ✅ fixed
            'password' => $hashedPassword,
            'normal_password' => $pass,

            // 'normal_password' => '',
            'profile_image' => '',
            'isActive' => 1,
            'created_on' => date('Y-m-d')
        ];

        $this->db->insert('user_master', $data);

        $this->session->set_flashdata('success', 'Registration successful');
        redirect('login');
    }
}