<?php

class Kendaraan extends Controller {
	public function index()
	{
		$data['title'] = 'Data Kendaraan';
		$data['kendaraan'] = $this->model('KendaraanModel')->getAllKendaraan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kendaraan/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Detail Kendaraan';
		$data['kendaraan'] = $this->model('KendaraanModel')->getKendaraanById($id);
		$data['fuel'] = $this->model('FuelModel')->getAllFuel();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kendaraan/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Kendaraan';		
		$data['fuel'] = $this->model('FuelModel')->getAllFuel();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kendaraan/create', $data);
		$this->view('templates/footer');
	}

	public function simpanKendaraan()
	{		
		if( $this->model('KendaraanModel')->tambahKendaraan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/kendaraan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/kendaraan');
			exit;	
		}
	}

	public function updateKendaraan()
    {	
		if( $this->model('KendaraanModel')->updateDataKendaraan($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/kendaraan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/kendaraan');
			exit;	
		}
	}

	public function hapus($id)
    {
		if( $this->model('KendaraanModel')->deleteKendaraan($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/kendaraan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/kendaraan');
			exit;	
		}
	}
}