<?php

class BookingModel {
	
	private $table = 'booking';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllBooking()
	{
		$this->db->query("SELECT booking.*, vehicles.vehicle_name, driver.driver_name, user1.name AS aprv1_name, user2.name AS aprv2_name
		FROM booking
		JOIN vehicles ON vehicles.vehicle_id = booking.vehicle_id
		JOIN driver ON driver.driver_id = booking.driver_id
		JOIN users AS user1 ON user1.id = booking.aprv1_id
		JOIN users AS user2 ON user2.id = booking.aprv2_id
		WHERE booking.aprv1_id <> booking.aprv2_id;");
		return $this->db->resultSet();
	}

	public function getBookingById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE booking_id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahBooking($data)
	{
		$query = "INSERT INTO booking (vehicle_id, driver_id, distance, cost, aprv1_id, aprv2_id) VALUES(:vehicle_id, :driver_id, :distance, :cost, :aprv1_id, :aprv2_id)";
		$this->db->query($query);
		$this->db->bind('vehicle_id', $data['vehicle_id']);
		$this->db->bind('driver_id', $data['driver_id']);
		$this->db->bind('distance', $data['distance']); 
		$this->db->bind('cost', $data['cost']); 
		$this->db->bind('aprv1_id', $data['aprv1_id']);
		$this->db->bind('aprv2_id', $data['aprv2_id']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataBooking($data)
	{
		$query = "UPDATE booking SET vehicle_id=:vehicle_id, driver_id=:driver_id, distance=:distance, cost=:cost, aprv1_id=:aprv1_id, aprv2_id=:aprv2_id WHERE booking_id=:booking_id";
		$this->db->query($query);
		$this->db->bind('booking_id', $data['booking_id']);
		$this->db->bind('vehicle_id', $data['vehicle_id']);
		$this->db->bind('driver_id', $data['driver_id']);
		$this->db->bind('distance', $data['distance']);
		$this->db->bind('cost', $data['cost']);
		$this->db->bind('aprv1_id', $data['aprv1_id']);
		$this->db->bind('aprv2_id', $data['aprv2_id']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteBooking($id)
	{
		
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE booking_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}