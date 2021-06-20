<?php
class registrasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('masuk')){
            redirect('home');
        }
    }

    public function index()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email Sudah Terdaftar !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Salah!',
            'min_length' => 'Password to short!'

        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('registrasi/index');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 'user',
                'saldo' => '0'
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login!</div>');
            redirect('login');
        }
		
    }

    
}

      
