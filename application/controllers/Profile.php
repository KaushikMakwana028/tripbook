<?php

class Profile extends CI_Controller
{



    public function __construct()
    {

        parent::__construct();

        $this->load->library('session');



        $this->load->helper('url');

        $this->load->model('general_model');





        $admin = $this->session->userdata('admin');

        if (!$admin || !isset($admin['id'])) {
            redirect('login');
            exit;
        }





    }



    public function index()
    {
        $admin = $this->session->userdata('admin');

        if (!$admin || !isset($admin['id'])) {
            redirect('login');
        }

        $id = $admin['id'];

        $data['profile'] = $this->db
            ->where('id', $id)
            ->get('user_master')   // ✅ SAME TABLE AS LOGIN
            ->row();

        $this->load->view('header', $data);
        $this->load->view('profile_view', $data);
        $this->load->view('footer');
    }

    public function update_profile()
    {
        header('Content-Type: application/json');

        $admin = $this->session->userdata('admin');

        if (!$admin || !isset($admin['id'])) {
            echo json_encode([
                'status' => 401,
                'message' => 'Session expired'
            ]);
            return;
        }

        $id = $admin['id'];

        $name = trim($this->input->post('name'));
        $email = trim($this->input->post('email'));
        $mobile = trim($this->input->post('mobile'));
        $password = trim($this->input->post('password'));

        if (empty($name) || empty($email) || empty($mobile)) {
            echo json_encode([
                'status' => 400,
                'message' => 'All fields are required'
            ]);
            return;
        }

        $updateData = [
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile
        ];

        // 🔐 Password update (keep both support)
        if (!empty($password)) {
            $updateData['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // ================= IMAGE UPLOAD =================
        if (!empty($_FILES['profile_image']['name'])) {

            $uploadPath = './uploads/profile/';

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $config = [
                'upload_path' => $uploadPath,
                'allowed_types' => 'jpg|jpeg|png',
                'max_size' => 2048,
                'file_name' => time() . '_' . $_FILES['profile_image']['name']
            ];

            $this->load->library('upload');
            $this->upload->initialize($config);

            if ($this->upload->do_upload('profile_image')) {

                $uploadData = $this->upload->data();
                $updateData['profile_image'] =
                    'uploads/profile/' . $uploadData['file_name'];

            } else {
                echo json_encode([
                    'status' => 400,
                    'message' => strip_tags($this->upload->display_errors())
                ]);
                return;
            }
        }

        // ================= UPDATE DATABASE =================
        $this->db->where('id', $id);
        $updated = $this->db->update('user_master', $updateData);  // ✅ SAME TABLE

        if (!$updated) {
            echo json_encode([
                'status' => 500,
                'message' => 'Database update failed'
            ]);
            return;
        }

        // ================= REFRESH SESSION =================
        $user = $this->db
            ->where('id', $id)
            ->get('user_master')
            ->row();

        if ($user) {

            $this->session->set_userdata('admin', [
                'id' => $user->id,
                'name' => $user->name,
                'business_name' => $user->business_name,
                'mobile' => $user->mobile,
                'profile_image' => $user->profile_image,
                'logged_in' => TRUE
            ]);
        }

        echo json_encode([
            'status' => 200,
            'message' => 'Profile updated successfully'
        ]);
    }
    public function fuel($user_id)
    {
        $data['user_id'] = $user_id;

        $this->load->view('header.php');
        $this->load->view('fuel_view.php', $data);
        $this->load->view('footer.php');
    }

    public function get_fuel_list()
    {
        $limit = 10;
        $page = $this->input->get('page') ?? 1;
        $search = $this->input->get('search') ?? '';
        $user_id = $this->input->get('user_id'); // 🔥 GET USER ID
        $offset = ($page - 1) * $limit;

        if (!$user_id) {
            echo json_encode([
                'status' => false,
                'message' => 'User ID is required',
                'data' => []
            ]);
            return;
        }

        $this->db->select('f.*, u.name, u.vehical_name, u.vehical_number');
        $this->db->from('fuel f');
        $this->db->join('users u', 'u.id = f.user_id', 'left');

        // 🔥 filter only logged user fuel data
        $this->db->where('f.user_id', $user_id);
        $this->db->where('f.isActive', 1);

        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('u.name', $search);
            $this->db->or_like('u.vehical_name', $search);
            $this->db->or_like('u.vehical_number', $search);
            $this->db->or_like('f.fuel_type', $search);
            $this->db->or_like('f.notes', $search);
            $this->db->group_end();
        }

        // count
        $countQuery = clone $this->db;
        $total_rows = $countQuery->count_all_results();

        $this->db->limit($limit, $offset);
        $this->db->order_by('f.id', 'DESC');
        $query = $this->db->get();
        $result = $query->result();

        echo json_encode([
            'status' => !empty($result),
            'data' => $result,
            'pagination' => [
                'total_rows' => $total_rows,
                'limit' => $limit,
                'current_page' => (int) $page,
                'total_pages' => ceil($total_rows / $limit)
            ]
        ]);
    }

    public function delete_fuel()
    {
        $id = $this->input->post('id');

        if (empty($id)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid ID'
            ]);
            return;
        }

        // ✅ Custom delete query
        $this->db->where('id', $id);
        $deleted = $this->db->delete('fuel');

        if ($deleted) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Record deleted successfully'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Failed to delete record'
            ]);
        }
    }

}