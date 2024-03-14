<?php

class FuelModel {
	
	private $table = 'fuel';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllFuel()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getFuelById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE fuel_id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahFuel($data)
	{
		$query = "INSERT INTO fuel (fuel_name, fuel_price) VALUES(:fuel_name, :fuel_price)";
		$this->db->query($query);
		$this->db->bind('fuel_name',$data['fuel_name']);
		$this->db->bind('fuel_price',$data['fuel_price']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataFuel($data)
	{
		$query = "UPDATE fuel SET fuel_name=:fuel_name, fuel_price=:fuel_price WHERE fuel_id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('fuel_name',$data['fuel_name']);
		$this->db->bind('fuel_price',$data['fuel_price']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteFuel($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE fuel_id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}
}