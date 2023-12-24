<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index');
	}
    public function cekLogin()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $log = $this->db->get_where('user', ['username' => $user]) -> row_array();

        $cek = ([
            'login' => false,
            'id' => $log['id'],
            'role' => $log['role']
        ]);

        $this->session->set_userdata($cek);

        if($log)
        {
            if($pass == $log["password"])
            {
                $cek['login'] = true;
                redirect("beranda/index");
            }
            else{
                echo "password anda salah";
            }
        }
        else
        {
            echo "username tidak ditemukan";
        }
    }
}
