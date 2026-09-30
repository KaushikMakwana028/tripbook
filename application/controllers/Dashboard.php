<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('general_model');
        $this->load->database();

        $admin = $this->session->userdata('admin');

        if (!$admin || !isset($admin['id'])) {
            $this->session->unset_userdata('admin');
            redirect('login');
            exit;
        }

        $this->vendor_id = $admin['id'];
    }

    public function index()
    {
        $admin = $this->session->userdata('admin');
        // $vendor_id = $admin['id'];
        $vendor_id = $admin['id'];

        // 1️⃣ Total drivers (role = 0)
        $total_drivers = $this->db
            ->where('role', 0)
            ->where('admin_id', $vendor_id)
            ->count_all_results('users');

        // 2️⃣ Total companies
        $total_companies = $this->db
            ->where('admin_id', $vendor_id)
            ->count_all_results('company');

        // 3️⃣ Total trips this month
        $month = date('m');
        $year = date('Y');

        $total_month_trips = $this->db
            ->where('admin_id', $vendor_id)
            ->where('MONTH(trip_date)', $month)
            ->where('YEAR(trip_date)', $year)
            ->count_all_results('trips');

        // 4️⃣ Today
        $today = date('Y-m-d');

        // 5️⃣ Total trips today
        $total_today_trips = $this->db
            ->where('admin_id', $vendor_id)
            ->where('trip_date', $today)
            ->count_all_results('trips');

        // 6️⃣ Running trips today
        $running_trips_today = $this->db
            ->where('admin_id', $vendor_id)
            ->where('trip_date', $today)
            ->where('status', 'running')
            ->count_all_results('trips');

        // 7️⃣ Completed trips today
        $completed_trips_today = $this->db
            ->where('admin_id', $vendor_id)
            ->where('trip_date', $today)
            ->where('status', 'completed')
            ->count_all_results('trips');

        $data = [
            'total_drivers' => $total_drivers,
            'total_companies' => $total_companies,
            'total_month_trips' => $total_month_trips,
            'total_today_trips' => $total_today_trips,
            'running_trips_today' => $running_trips_today,
            'completed_trips_today' => $completed_trips_today
        ];

        $this->load->view('header');
        $this->load->view('dashboard_view', $data);
        $this->load->view('footer');
    }

 
 

    public function customer()
    {
        $admin = $this->session->userdata('admin');
        $vendor_id = $admin['id'];

        $this->data['customer'] = $this->db
            ->where('role', 2)
            ->where('admin_id', $vendor_id)
            ->get('users')
            ->result();

        $this->load->view('admin/header');
        $this->load->view('admin/customer_view', $this->data);
        $this->load->view('admin/footer');
    }

    public function get_customers()
    {
        $admin = $this->session->userdata('admin');
        $vendor_id = $admin['id'];

        $per_page = 10;
        $page = $this->input->post('page') ? $this->input->post('page') : 1;
        $offset = ($page - 1) * $per_page;

        $total = $this->db
            ->where('role', 2)
            ->where('admin_id', $vendor_id)
            ->count_all_results('users');

        $customers = $this->db
            ->where('role', 2)
            ->where('admin_id', $vendor_id)
            ->limit($per_page, $offset)
            ->get('users')
            ->result();

        $response = [
            'customers' => $customers,
            'total' => $total,
            'per_page' => $per_page
        ];

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}