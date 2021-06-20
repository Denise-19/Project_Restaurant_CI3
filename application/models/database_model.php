<?php

class database_model extends CI_model {

    public function getAllMenu()
    {
        $this->db->join('kategori_menu', 'kategori_menu.id_kategori = menu.kategori');
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function getAllUser()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function getAllRiwayat()
    {
        $query = $this->db->get('riwayat_penjualan');
        return $query->result_array();
    }

    public function getMenuByID($id)
    {
        return $this->db->get_where('menu', ['id' => $id])->row_array();
    }

    public function getUserByID($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }

    public function setUser()
    {
        $data = array(
            'id' => NULL,
            'username' => $this->input->post('username',true),
            'email' => $this->input->post('email',true),
            'password' => $this->input->post('password',true),
            'role' => $this->input->post('role',true),
            'saldo' => $this->input->post('saldo',true)
        );
    
        $this->db->insert('users', $data);
    }

    public function setRiwayat()
    {
        $data = array(
            'id' => NULL,
            'tanggal_beli' => $this->input->post('tanggal',true),
            'Username' => $this->input->post('username',true),
            'total_harga' => $this->input->post('harga',true),
        );
    
        $this->db->insert('riwayat_penjualan', $data);
    }

    public function setMenu()
    {
        $config['upload_path']          = './upload/';
		$config['allowed_types']        = 'jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar'))
		{
				$error = array('error' => $this->upload->display_errors());
                echo '<script>alert('.$error.'); document.location="'.base_url().'database";</script>';
		}
		else
		{
            $data = array(
                'id' => NULL,
                'nama' => $this->input->post('nama_makanan',true),
                'harga' => $this->input->post('harga',true),
                'ukuran' => $this->input->post('ukuran',true),
                'kategori' => $this->input->post('kategori',true),
                'gambar' => $this->upload->data('file_name')
            );
        
            $this->db->insert('menu', $data);
		}
        
    }

    public function updateMenu()
    {
        $config['upload_path']          = './upload/';
		$config['allowed_types']        = 'jpg|png';
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('gambar'))
		{
				
		}
		else
		{
            $data = array(
                'nama' => $this->input->post('nama_makanan',true),
                'harga' => $this->input->post('harga',true),
                'ukuran' => $this->input->post('ukuran',true),
                'kategori' => $this->input->post('kategori',true),
                'gambar' => $this->upload->data('file_name')
            );
        
            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('menu', $data);
		}
    }

    public function updateUser(){
        $data = array(
            'username' => $this->input->post('username',true),
            'email' => $this->input->post('email',true),
            'password' => $this->input->post('password',true),
            'role' => $this->input->post('role',true),
            'saldo' => $this->input->post('saldo',true)
        );
    
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('users', $data);
    }

    public function updateSaldo($username,$saldo){
        
        $data = array(
            'saldo' => $saldo
        );
    
        $this->db->where('username', $username);
        return $this->db->update('users', $data);
    }

    public function potongSaldo($username,$saldo){
        
        $data = array(
            'saldo' => $saldo
        );
    
        $this->db->where('username', $username);
        return $this->db->update('users', $data);
    }

    public function hapusMenu($id){
        $this->db->where('id', $id);
        $this->db->delete('menu');
    }

    public function hapusUser($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    public function hapusRiwayatPenjualan($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

}