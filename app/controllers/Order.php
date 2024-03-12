<?php

class Order extends Controller {
	
	public function index()
	{
		$data['title'] = 'Halaman Order';
		$data['order'] = $this->model('OrderModel')->getAllOrder();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('order/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Persetujuan';
		$data['order'] = $this->model('OrderModel')->getOrderById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('order/edit', $data);
		$this->view('templates/footer');
	}
	
    public function lihatlaporan()
	{
		$data['title'] = 'Halaman Order';
		$data['order'] = $this->model('OrderModel')->getAllOrder();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('order/report', $data);
		$this->view('templates/footer');
	}

	public function updateOrder(){	
		if( $this->model('OrderModel')->updateDataOrder($_POST) > 0 ) {
			Flasher::setMessage('Persetujuan berhasil','dikirim','success');
			header('location: '. base_url . '/order');
			exit;			
		}else{
			Flasher::setMessage('Persetujuan gagal','dikirim','danger');
			header('location: '. base_url . '/order');
			exit;	
		}
	}
}