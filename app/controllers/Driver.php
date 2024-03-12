<?php

class Driver extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Driver';
		$data['driver'] = $this->model('DriverModel')->getAllDriver();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('driver/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['title'] = 'Data Driver';
		$data['driver'] = $this->model('DriverModel')->cariDriver();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('driver/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Detail Driver';
		$data['driver'] = $this->model('DriverModel')->getDriverById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('driver/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Driver';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('driver/create', $data);
		$this->view('templates/footer');
	}

	public function simpanDriver()
	{		
		if( $this->model('DriverModel')->tambahDriver($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/driver');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/driver');
			exit;	
		}
	}

	public function updateDriver()
    {	
		if( $this->model('DriverModel')->updateDataDriver($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/driver');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/driver');
			exit;	
		}
	}

	public function hapus($id)
    {
		if( $this->model('DriverModel')->deleteDriver($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/driver');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/driver');
			exit;	
		}
	}
}