<?php
class saldo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('database_model');
    }
    

	public function tambah_saldo()
	{
        
		$this->load->view('saldo/index');
        $topup=$this->input->post('saldo',true);
        $saldo = $this->session->userdata('saldo');
        $total = $topup + $saldo; 
        if(isset($_POST['submit'])){
            $username = $this->session->userdata('username');
            $this->database_model->updateSaldo($username,$total);
            $data = [
                'saldo' => $total,
            ];
            $this->session->set_userdata($data);
            echo '<script>alert("Berhasil Tambah Saldo."); document.location="'.base_url().'";</script>';
        }
	}

}

      
