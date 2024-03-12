<?php

class Dashboard extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Dashboard';
		$data['BookingCount'] = $this->model('DashboardModel')->countBooking();
		$data['VehicleCount'] = $this->model('DashboardModel')->countVehicle();
		$data['DriverCount'] = $this->model('DashboardModel')->countDriver();
		$data['ApprovedCount'] = $this->model('DashboardModel')->countApproved();
		$data['fuel'] = $this->model('DashboardModel')->getAllFuel();
		$data['kendaraan'] = $this->model('DashboardModel')->getAllKendaraan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}