<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function delete_account()
    {
        $this->load->view('delete_account');
    }

    public function terms()
    {
        $this->load->view('terms_conditions');
    }
    public function privacy()
    {
        $this->load->view('privacy_policy');
    }
}