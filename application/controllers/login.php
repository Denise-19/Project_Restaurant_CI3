<?php
class login extends CI_Controller {

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
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
		
        if ($this->form_validation->run() == false) {
            $this->load->view('login/index');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('users', ['email' => $email])->row_array();

            //user ada
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'role' => $user['role'],
                        'saldo' => $user['saldo'],
                        'id_user' => $user['id'],
                        'masuk' => true
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered!</div>');
                redirect('login');
            }
        }

	}

    
}

      
