<?php
class database extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('database_model');
        if($this->session->userdata('role')!='admin'){
            redirect('home');
        }
    }

    public function index()
	{
		$this->load->view('database/index');
        $this->load->view('database/home');
		$this->load->view('database/footer');
	}

    public function dataMenu()
    {
        $data['tampilMenu'] = $this->database_model->getAllMenu();
        $this->load->view('database/index');
        $this->load->view('database/dataMenu',$data);
		$this->load->view('database/footer');
    }

    public function dataRiwayatPenjualan()
    {
        $data['tampilRiwayat'] = $this->database_model->getAllRiwayat();
        $this->load->view('database/index');
        $this->load->view('database/dataRiwayatPenjualan',$data);
		$this->load->view('database/footer');
    }

    public function dataUser()
    {
        $data['tampilUser'] = $this->database_model->getAllUser();
        $this->load->view('database/index');
        $this->load->view('database/dataUser',$data);
		$this->load->view('database/footer');
    }

    public function tambahUser()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email',
            array('required' => 'Anda Harus Mengisi %s. dengan benar'));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]',
            array('required' => 'Anda Harus Mengisi %s.'));
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('saldo', 'Saldo', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('database/index');
            $this->load->view('database/tambahUser');
            $this->load->view('database/footer');
        }else{
            $this->database_model->setUser();
            echo '<script>alert("Berhasil Tambah Data."); document.location="'.base_url().'database";</script>';
        }
        
    }

    public function tambahMenu(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_makanan', 'Nama_makanan', 'required|min_length[3]');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('database/index');
            $this->load->view('database/tambahMenu');
            $this->load->view('database/footer');
        }else{
            $this->database_model->setMenu();
            echo '<script>alert("Berhasil Tambah Data."); document.location="'.base_url().'database";</script>';
        }
    }

    public function editUser($id){
        $data['dataUser']=$this->database_model->getUserByID($id);
        
            $this->load->view('database/index');
            $this->load->view('database/editUser',$data);
            $this->load->view('database/footer');
        if(isset($_POST['ubah'])){
            
            $this->database_model->updateUser();
            echo '<script>alert("Berhasil edit Data."); document.location="'.base_url().'database";</script>';
            
        }
    }

    public function editMenu($id)
    {
        $data['dataMenu']=$this->database_model->getMenuByID($id);
        
        $this->load->view('database/index');
        $this->load->view('database/editMenu',$data);
        $this->load->view('database/footer');
        if(isset($_POST['ubah'])){
            $this->database_model->updateMenu();
            echo '<script>alert("Berhasil edit Data."); document.location="'.base_url().'database";</script>';
        }
    
    }

    public function deleteMenu($id){
        $this->database_model->hapusMenu($id);
        echo '<script>alert("Berhasil Hapus Data."); document.location="'.base_url().'database";</script>';
    }

    public function deleteRiwayatPenjualan($id){
        $this->database_model->hapusRiwayatPenjualan($id);
        echo '<script>alert("Berhasil Hapus Data."); document.location="'.base_url().'database";</script>';
    }

    public function deleteUser($id){
        $this->database_model->hapusUser($id);
        echo '<script>alert("Berhasil Hapus Data."); document.location="'.base_url().'database";</script>';
    }
}

      
