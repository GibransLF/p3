<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Beranda_model');
    }
	public function index()
	{
		if($this->session->userdata('role') == true ){
			$data['user'] = $this->Beranda_model->get_user();
			$this->load->view('beranda/index',$data);
		}
		else{
			redirect('login/index');
		}
	}
	public function add()
	{
		$this->load->view('beranda/add');
	}
	public function create()
	{
		$ni = $this->input->post('ni');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = [
            'ni'=> $ni,
            'nama'=> $nama,
            'username' => $username,
            'password'=> $password,
            'role' => $role
        ];

        $this->Beranda_model->create($data);
		redirect('beranda/index');
	}
	public function edit()
	{
		$id = $this->input->get('id');
		$data['user'] = $this->Beranda_model->get_user_by_id($id);

		$this->load->view('beranda/edit',$data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$ni = $this->input->post('ni');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = [
            'ni'=> $ni,
            'nama'=> $nama,
            'username' => $username,
            'password'=> $password,
            'role' => $role
        ];

        $this->Beranda_model->update($id, $data);
		redirect('beranda/index');
	}
	
	public function delete(){
		$id = $this->input->get('id');
		$this->Beranda_model->delete($id);
		redirect('beranda/index');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}
