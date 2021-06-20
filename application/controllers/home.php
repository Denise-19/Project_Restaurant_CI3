<?php
class home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index()
	{
		$data['tampilMenu']= $this->menu_model->getAllMenu();
		$data['masuk']= $this->session->userdata('masuk');
		$data['role']= $this->session->userdata('role');
		$data['id_user']= $this->session->userdata('id_user');
		$data['saldo']= $this->session->userdata('saldo');
		$this->load->view('home/header');
		$this->load->view('home/navbar',$data);
		$this->load->view('home/index',$data);
		$this->load->view('home/footer');
	 
	}

    public function tambah_ke_keranjang($id)
	{
		$barang = $this->menu_model->find($id);

		$data = array(
			'id'      => $barang->id,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama,
			'gambar' => $barang->gambar,
			'ukuran' => $barang->ukuran
		);
	
		$this->cart->insert($data);
		redirect('home');
	}
}

      
