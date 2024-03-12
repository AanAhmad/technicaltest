<?php

class DashboardModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function countBooking() {
        $this->db->query("SELECT booking.*, vehicles.vehicle_name, driver.driver_name, user1.name AS aprv1_name, user2.name AS aprv2_name
            FROM booking
            JOIN vehicles ON vehicles.vehicle_id = booking.vehicle_id
            JOIN driver ON driver.driver_id = booking.driver_id
            JOIN users AS user1 ON user1.id = booking.aprv1_id
            JOIN users AS user2 ON user2.id = booking.aprv2_id
            WHERE booking.aprv1_id <> booking.aprv2_id;");
            $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllKendaraan()
	{
		$this->db->query('SELECT * FROM vehicles');
		return $this->db->resultSet();
	}

    public function countVehicle() {
        $this->db->query('SELECT * FROM vehicles');
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function countDriver() {
        $this->db->query('SELECT * FROM driver');
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function countApproved() {
        $this->db->query("SELECT * FROM booking WHERE status = 'Disetujui'");
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllFuel() {
        $this->db->query('SELECT * FROM fuel');
        $this->db->execute();
        return $this->db->resultSet();
    }
}
