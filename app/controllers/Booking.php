<?php

class Booking extends Controller {

	public function index()
	{
		$data['title'] = 'Halaman Booking';
		$data['booking'] = $this->model('BookingModel')->getAllBooking();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('booking/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Booking';
		$data['booking'] = $this->model('BookingModel')->getBookingById($id);
		$data['vehicles'] = $this->model('KendaraanModel')->getAllKendaraan();
		$data['driver'] = $this->model('DriverModel')->getAllDriver();
		$data['users'] = $this->model('UserModel')->getAllUser();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('booking/edit', $data);
		$this->view('templates/footer');
	}
	
    public function lihatlaporan()
	{
		$data['title'] = 'Laporan Booking';
		$data['booking'] = $this->model('BookingModel')->getAllBooking();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('booking/report', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Booking';		
		$data['vehicles'] = $this->model('KendaraanModel')->getAllKendaraan();
		$data['driver'] = $this->model('DriverModel')->getAllDriver();
		$data['users'] = $this->model('UserModel')->getAllUser();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('booking/create', $data);
		$this->view('templates/footer');
	}

	public function simpanBooking(){	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$aprv1_id = $_POST['aprv1_id'];
			$aprv2_id = $_POST['aprv2_id'];
			if ($aprv1_id == $aprv2_id) {
				Flasher::setMessage('Gagal','Penyetuju 1 and Penyetuju 2 tidak boleh sama.','danger');
				header('location: '. base_url . '/booking/tambah');
				exit;
			} else {
				if( $this->model('BookingModel')->tambahBooking($_POST) > 0 ) {
					Flasher::setMessage('Berhasil','ditambahkan','success');
					header('location: '. base_url . '/booking');
					exit;			
				}else{
					Flasher::setMessage('Gagal','ditambahkan','danger');
					header('location: '. base_url . '/booking');
					exit;	
				}
			}
		}	
	}

	public function updateBooking(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$aprv1_id = $_POST['aprv1_id'];
			$aprv2_id = $_POST['aprv2_id'];
			if ($aprv1_id == $aprv2_id) {
				Flasher::setMessage('Gagal','Penyetuju 1 and Penyetuju 2 tidak boleh sama.','danger');
				header('location: '. base_url . '/booking/edit/'.$_POST['booking_id']);
				exit;
			} else {	
				if( $this->model('BookingModel')->updateDataBooking($_POST) > 0 ) {
					Flasher::setMessage('Berhasil','diupdate','success');
					header('location: '. base_url . '/booking');
					exit;			
				}else{
					Flasher::setMessage('Gagal','diupdate','danger');
					header('location: '. base_url . '/booking');
					exit;	
				}
			}
		}
	}

	public function hapus($id){
		if( $this->model('BookingModel')->deleteBooking($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/booking');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/booking');
			exit;	
		}
	}
}