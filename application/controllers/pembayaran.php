<?php
class pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('database_model');
    }
    
    public function index()
	{
		$data['id_user']= $this->session->userdata('id_user');
        $data['username']= $this->session->userdata('username');
        $data['masuk']= $this->session->userdata('masuk');
		$data['role']= $this->session->userdata('role');
		$data['saldo']= $this->session->userdata('saldo');
        $data['keranjang']=$this->cart->contents();
        $data['total_belanja']=$this->cart->total();
		$this->load->view('home/header');
		$this->load->view('home/navbar',$data);
		$this->load->view('pembayaran/index',$data);
		$this->load->view('home/footer');
        if(isset($_POST['submit'])){
            $username = $this->session->userdata('username');
            $harga = $this->input->post('harga',true);
            $saldo = $this->input->post('saldo',true);
            $total = $saldo-$harga;
            if($saldo>=$harga){
                $this->database_model->potongSaldo($username,$total);
                $data = [
                    'saldo' => $total,
                ];
                $this->session->set_userdata($data);
                $this->database_model->setRiwayat();
                $this->cart->destroy();
                echo "<script> alert('Terimakasih sudah membeli di FastFood Kelompok 3 !'); document.location.href = 'index.php';</script>";
            }else { echo "<script>alert('Maaf Saldo Anda Tidak Cukup!');history.go(-2);</script>"; }
                
        }
	 
	}

    public function hapus($rowid)
    {
       

        $this->cart->remove($rowid);
        
        redirect('pembayaran');
        
    }

    public function tambah($rowid)
    {
        $i=1;
        foreach ($this->cart->contents() as $items):
        
            $data = array(
                'rowid'   => $items['rowid'],
                'qty'     => $this->input->post($i.'[qty]')
            );
            $i++;
            endforeach;
    
            $this->cart->update($data);
            
            redirect('pembayaran');
    }
	
}

      
