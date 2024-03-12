<?php

class KendaraanModel {
	
	private $table = 'vehicles';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllKendaraan()
	{
		$this->db->query('SELECT vehicles.*, fuel.fuel_name FROM vehicles JOIN fuel ON fuel.fuel_id = vehicles.fuel_id;');
		return $this->db->resultSet();
	}

	public function getKendaraanById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE vehicle_id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahKendaraan($data)
	{
		$query = "INSERT INTO vehicles (vehicle_name, manufacturer, type, fuel_id, fuel_consumption, last_service, next_service, owner) VALUES(:vehicle_name, :manufacturer, :type, :fuel_id, :fuel_consumption, :last_service, :next_service, :owner)";
		$this->db->query($query);
		$this->db->bind('vehicle_name',$data['vehicle_name']);
		$this->db->bind('manufacturer',$data['manufacturer']);
		$this->db->bind('type',$data['type']);
		$this->db->bind('fuel_id',$data['fuel_id']);
		$this->db->bind('fuel_consumption',$data['fuel_consumption']);
		$this->db->bind('last_service',$data['last_service']);
		$this->db->bind('next_service',$data['next_service']);
		$this->db->bind('owner',$data['owner']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataKendaraan($data)
	{
		$query = "UPDATE vehicles SET vehicle_name=:vehicle_name, manufacturer=:manufacturer, type=:type, fuel_id=:fuel_id, fuel_consumption=:fuel_consumption, last_service=:last_service, next_service=:next_service, owner=:owner WHERE vehicle_id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('vehicle_name',$data['vehicle_name']);
		$this->db->bind('manufacturer',$data['manufacturer']);
		$this->db->bind('type',$data['type']);
		$this->db->bind('fuel_id',$data['fuel_id']);
		$this->db->bind('fuel_consumption',$data['fuel_consumption']);
		$this->db->bind('last_service',$data['last_service']);
		$this->db->bind('next_service',$data['next_service']);
		$this->db->bind('owner',$data['owner']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteKendaraan($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE vehicle_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}