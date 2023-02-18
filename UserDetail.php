<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserDetail extends CI_Controller
{
    public function index()
    {
        $this->load->library('user_agent');
        $data['title']          = "USER AGENT";
        $data['browser']        = $this->agent->browser();
        $data['versi_browser']  = $this->agent->version();
        $data['os']             = $this->agent->platform();
        $data['ip_address']     = $this->input->ip_address();
        $this->load->view('user_detail', $data);
    }
}
