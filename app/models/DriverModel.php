<?php

class DriverModel {
	
	private $table = 'driver';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllDriver()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getDriverById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE driver_id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDriver($data)
	{
		$query = "INSERT INTO driver (driver_name, phone, email, license_number) VALUES(:driver_name, :phone, :email, :license_number)";
		$this->db->query($query);
		$this->db->bind('driver_name',$data['driver_name']);
		$this->db->bind('phone',$data['phone']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('license_number',$data['license_number']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataDriver($data)
	{
		$query = "UPDATE driver SET driver_name=:driver_name, phone=:phone, email=:email, license_number=:license_number WHERE driver_id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('driver_name',$data['driver_name']);
		$this->db->bind('phone',$data['phone']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('license_number',$data['license_number']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteDriver($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE driver_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}