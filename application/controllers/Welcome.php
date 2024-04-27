<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Login';
		$data['abc'] = 'Login/welcome_message';
		$this->load->view('Login/templates/index', $data);
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			redirect('Welcome');
		} else {
			$input = $this->input->post(null, true);

			$username = $input['username'];
			$password = $input['password'];

			$user = $this->db->get_where('user', (['username' => $username]))->row_array();
			// var_dump($user);
			// die;
			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data['username'] = $user['username'];
					$data['role_id'] = $user['role_id'];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else if ($user['is_active'] == 'aktif') {
						redirect('petugas/dashboard');
					} else {
						redirect('Welcome');
					}
				} else {
					$this->session->set_flashdata("error", 'Password Salah!!');
					redirect('Welcome');
				}
			} else {
				$this->session->set_flashdata("error", 'Username Salah!!');
				redirect('Welcome');
			}
		}
	}

	public function regist()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => (password_hash($this->input->post('password'), PASSWORD_DEFAULT)),
			'is_active' => $this->input->post('is_active'),
			'role_id' => '2',
		];

		// var_dump($data);
		// die;

		$this->db->insert('user', $data);
		redirect('admin/Petugas');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata("success", 'Logout Berhasil !!');
		redirect('Welcome');
	}
}
