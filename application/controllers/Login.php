<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('general_model');
    }
public function index()
{
    // If already logged in
    $admin = $this->session->userdata('admin');
    if ($admin && isset($admin['id'])) {
        redirect('dashboard');
    }

    $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === TRUE) {

        $mobile = trim($this->input->post('mobile'));
        $password = trim($this->input->post('password'));

        $user = $this->db
            ->where('mobile', $mobile)
            ->get('user_master')
            ->row();

        if ($user) {

            // ✅ Check if account inactive
            if ($user->isActive == 0) {
                $this->session->set_flashdata('error', 'Your account is not active');
                redirect('login');
                return;
            }

            $loginSuccess = false;

            // ✅ Bcrypt password
            if (password_verify($password, $user->password)) {
                $loginSuccess = true;
            }
            // ✅ Old MD5 support
            elseif ($user->password === md5($password)) {
                $loginSuccess = true;
            }

            if ($loginSuccess) {

                $session = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'business_name' => $user->business_name,
                    'mobile' => $user->mobile,
                    'profile_image' => $user->profile_image,
                    'company_code' => $user->admin_code,

                    'logged_in' => TRUE
                ];

                $this->session->set_userdata('admin', $session);

                redirect('dashboard');
                return;
            }
        }

        $this->session->set_flashdata('error', 'Invalid mobile or password');
        redirect('login');
    }

    $this->load->view('admin/login_view');
}

   

    public function logout()
    {
        $this->session->unset_userdata('admin');  // ✅ FIXED
        $this->session->sess_destroy();           // ✅ destroy session
        redirect('login');
    }
}