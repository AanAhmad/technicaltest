<?php

class Fuel extends Controller {
	
	public function index()
	{
		$data['title'] = 'Halaman Bahan Bakar';
		$data['fuel'] = $this->model('FuelModel')->getAllFuel();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('fuel/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Detail Bahan Bakar';
		$data['fuel'] = $this->model('FuelModel')->getFuelById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('fuel/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah() 
	{
		$data['title'] = 'Tambah Bahan Bakar';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('fuel/create', $data);
		$this->view('templates/footer');
	}

	public function simpanFuel()
	{		
		if( $this->model('FuelModel')->tambahFuel($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/fuel');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/fuel');
			exit;	
		}
	}

	public function updateFuel()
    {	
		if( $this->model('FuelModel')->updateDataFuel($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/fuel');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/fuel');
			exit;	
		}
	}

	public function hapus($id)
    {
		if( $this->model('FuelModel')->deleteFuel($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/fuel');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/fuel');
			exit;	
		}
	}
}